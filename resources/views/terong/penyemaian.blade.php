@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Penyemaian</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/penyemaian_terong.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
                    <h5 class="card-title">Penyemaian</h5>
                    <p class="card-text" style="text-align: justify;">
                      Persemaian dimaksudkan untuk menyiapkan bibit yang sehat dan kuat sebagai bahan tanan di lahan produksi. Untuk tahap-tahap persemaian secara lengkap bisa dilihat di bawah ini. Berikut urutan yang harus dilakukan : <br>
                      1.	Pembuatan rumah pembibitan
                      <br>2.	Persiapan media semai, benih, pupuk, tray semai dan panel bibit.
                      <br>3.	Proses penyemaian : mengecambakan benih dengan menggunakan kertas tissue pada tray semai yang disimpan di tempat gelap. Jika benih telah berkecambah dipindahkan ke panel bibit.
                      <br>4.	Pemeliharaan : pemberian pupuk, penyiraman, pengendalian HPT
                      <br>5.	Penanaman bibit di lahan : bibit tanaman terong yang siap tanam dapat dipindahkan ke lapang setelah berumur 4-6 minggu atau mempunyai 3-4 helai daun.

                    </p>
                  </div>
                </div>
                
                
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemilihan_Tanaman.html">Penilihan Varietas</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Penyemaian.html">Penyemaian</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Persiapan_Lahan.html">Persiapan Lahan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Penanaman.html">Penanaman</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemeliharaan.html">Pemeliharaan</a></b></li>                   
                  </ul>
                </div>
              </div>
              
            </div>
@endsection