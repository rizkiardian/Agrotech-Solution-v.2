@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Perawatan</h5>

            <div class="row mb-5">

              <div class="col-lg-8 mb-4">

                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/perawatan_cabai.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Perawatan🍀</h5>
                    <h5 class="card-title"></h5>
                    <p class="card-text" style="text-align: justify;">
                      Pengairan diperlukan saat musim kemarau saja. Bila konsidisi terlalu kering tanaman cabe rawit
                      bisa mati,pengairan bisa dilakukan dengan merendam bedengan. Perendaman bendengan cukup dilakukan
                      setiap dua minggu sekali

                      Pemukan susulan ditambahkan setelah tanaman berumur 1 bulan sejak bibit ditanam.selanjutnya
                      berikan pemupukan susulan setiap habis panen. Pemupukan susulan bisa menggunakan pupuk organik
                      cair atau kompos

                      Berikan pupuk cair yang telah diencerkan sebanyak 100 ml untuk setiap tanaman. Sedangkan pupuk
                      kompos sebanyak 500-700 gram. Bisa juga ditambahkan urea dan NPK sebagai pupuk tambahan.Perawatan
                      lain yang diperlukan adalah penyiangan. Karena budidaya cabe rawit jarang menggunakan mulsa maka
                      penyiangan harus dilakukan lebih intensis. Upayakan bedengan untuk besih dari gulma

                    </p>
                  </div>
                </div>


              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemilihan_Tanaman.html">Pemilihan Tanaman</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Penyemaian.html">Penyemaian</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pengolahan tanah.html">Pengolahan tanah</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Perawatan.html">Perawatan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemupukan.html">Pemupukan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pengendalian_hama_penyakt.html">Pengendalian hama & penyakit</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="panen.html">Panen</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="pasca_panen.html">Pasca panen</a></b></li>
                  </ul>
                </div>
              </div>

            </div>
@endsection