@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Pemilihan Tanaman</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/benih_delai.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
                    <h5 class="card-title">Pemilihan Benih</h5>
                    <p class="card-text" style="text-align: justify;">
                      Saat memilih kedelai, penting untuk menyortir dan menyimpan benih. Benih dapat dipakai apabila kondisi bagus, utuh dan mempunyai potensi pertumbuhan yang tinggi dengan syarat sebagai berikut:
                      <br><br>
                      1.	Sehat, tidak menularkan penyakit dan tidak tertular jamur penyebab busuk.
                      <br>2.	Varietas murni dan diketahui jenisnya.
                      <br>3.	Khasiat yang kuat: pertumbuhan yang cepat dan pertumbuhan yang sehat pada saat yang bersamaan.
                      <br>4.	Daya perkecambahan tinggi, yaitu 80% atau lebih.
                      <br>5.	Bernas, tidak kusut, utuh, dan kering
                      <br>6.	Bersihkan, tidak tercampur dengan bibit rumput, kotoran dan bibit tanaman lainnya.
                      <br>7.	Kebutuhan benih per hektar antara 30 sampai 50 kg, tergantung jarak yang digunakan, ukuran benih (berat 100 benih) dan kecepatan perkecambahan.
                      
                    </p>
                  </div>
                </div>
                
                
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemilihan_Tanaman.html">Pemilihan Tanaman</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pengolahan tanah.html">Pengolahan tanah</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Penanaman.html">Penanaman</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemeliharaan.html">Pemeliharaan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Hama.html">Pengendalian hama & penyakit</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="panen.html">Panen</a></b></li>
                  </ul>
                </div>
              </div>
              
              
            </div>
@endsection