<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\ResetPassword;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AutentikasiController extends Controller
{
    protected $TabelUser;
    protected $TabelResetPassword;

    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->TabelUser = new User();
        $this->TabelResetPassword = new ResetPassword();
    }

    public function login()
    {
        return view('login');
    }

    public function login_proses(Request $request)
    {
        $validasi = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required', 'min:8']
            ],
            [
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Email tidak valid',
                'password.required' => 'Password wajib diisi',
                'password.min' => 'Password minimal harus memiliki 8 karakter'
            ]
        );

        $inputData = $request->all();
        $user = $this->TabelUser->where('email', $inputData['email'])->first();

        if ($user != null) {
            // Jika email benar
            if (Hash::check($inputData['password'], $user->password)) {
                // Jika password benar
                $simpan_session = [
                    'id_level_user' => $user->id_level_user,
                    'id_user' => $user->id_user,
                    'nama_user' => $user->nama_user
                ];
                $request->session()->put('user', $simpan_session);
                if ($user->id_level_user == '1') {
                    return redirect()->intended('/admin');
                } elseif ($user->id_level_user == '2') {
                    return redirect()->intended('/dashboard-user');
                }
            } else {
                // Jika password salah
                return redirect()->back()->withErrors(['password' => 'Password Salah!']);
            }
        } else {
            // Jika email salah
            return redirect()->back()->withErrors(['email' => 'Email Salah!']);
        }
    }

    public function register()
    {
        return view('register');
    }

    public function register_proses(Request $request)
    {
        $validasi = $request->validate(
            [
                'name' => ['required', 'max:255'],
                'email' => ['required', 'email', 'max:255', 'unique:user'],
                'password' => ['required', 'min:8', 'confirmed'],
            ],
            [
                'name.required' => 'Nama wajib diisi',
                'name.max' => 'Nama terlalu panjang',
                'email.required' => 'Email wajib diisi',
                'email.email' => 'Format Email tidak valid',
                'email.max' => 'Email terlalu panjang',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password wajib diisi',
                'password.min' => 'Password minimal harus memiliki 8 karakter',
                'password.confirmed' => 'Konfirmasi password tidak cocok'
            ]
        );

        // menambahkan data user ke database
        $this->TabelUser->create([
            'id_level_user' => 2,
            'nama_user' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'create_date' => now()
        ]);

        return redirect()->route('login');
    }

    public function showLinkRequestForm()
    {
        return view('lupa_password/lupa_password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        // Validasi data email
        $validasi = $request->validate([
            'email' => 'required|email',
        ]);

        // Cek apakah email pengguna ada dalam tabel user
        $user = $this->TabelUser->where('email', $request->email)->first();

        if ($user != null) {
            // Generate token reset password
            $token = Hash::make(uniqid(rand(), true));
            // Simpan token reset password dan email pengguna ke dalam tabel reset_password
            $this->TabelResetPassword->insert([
                'email' => $user->email,
                'token' => $token,
                'create_date' => now()
            ]);

            // Kirim email reset password ke pengguna
            $resetLink = route('password.reset', ['token' => $token]);
            $data = [
                'resetLink' => $resetLink
            ];
            Mail::send('lupa_password/reset_password', $data, function ($message) use ($user) {
                $message->to($user->email, $user->name)->subject('Reset Password');
            });

            // Jika email ditemukan dalam tabel pengguna
            return redirect()->back()->with('success', 'Tautan reset password telah dikirim ke email Anda.');
        } else {
            // Jika email tidak ditemukan dalam tabel pengguna
            return redirect()->back()->with('error', 'Email tidak terdaftar.');
        }
    }

    public function showResetForm(Request $request, $token = null)
    {
        $resetpassword = $this->TabelResetPassword->firstWhere([
            'token' => $token,
            'status' => 'aktif'
        ]);

        // cek apakah reset password masih mempunyai token yang aktif
        if ($resetpassword != null) {
            return view('lupa_password/reset', ['token' => $token, 'email' => $resetpassword->email]);
        } else {
            return view('lupa_password/gagal_reset');
        }
    }

    public function reset(Request $request)
    {
        // Validasi data inputan
        $validasi = $request->validate(
            [
                'token' => ['required'],
                'email' => ['required'],
                'password' => ['required', 'min:8', 'confirmed'],
            ],
            [
                'token.required' => 'Token wajib diisi',
                'email.required' => 'Email wajib diisi',
                'password.required' => 'Password wajib diisi',
                'password.min' => 'Password minimal harus memiliki 8 karakter',
                'password.confirmed' => 'Konfirmasi password tidak cocok'
            ]
        );

        // Cek apakah tabel user dan tabel reset_password itu sesuai
        $user = $this->TabelUser->where('email', $request->email)->first();
        $resetpassword = $this->TabelResetPassword->where('token', $request->token)->first();

        if ($user != null && $resetpassword != null) {
            // perbarui password pada tabel user
            $user->update([
                'password' => Hash::make($request->password),
                'update_date' => now()
            ]);
            // perbarui status pada tabel reset_password
            $resetpassword->update([
                'status' => 'dipakai'
            ]);
        }

        // Redirect ke halaman login atau berikan respons berhasil
        return redirect('/login')->with('success', 'Password telah berhasil direset');
    }
}
