@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Penanaman</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/tanam_semangka.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
                    <h5 class="card-title">Penanaman</h5>
                    <p class="card-text" style="text-align: justify;">
                      Bibit yang sudah tumbuh daun sejati sejumlah empat helai siap dipindah ke lahan. Satu lubang tanam untuk satu bibit. Menanam semangka sebaiknya dilakukan saat pagi hari sebelum jam 10.00 WIB atau sore hari setelah jam 15.00 WIB untuk menghindari tanaman mengalami stress tinggi akibat sengatan terik matahari.

                    </p>
                  </div>
                </div>
                
                
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);"
                          href="Pemilihan_Tanaman.html">Pemilihan Tanaman</a></b></li>
                          <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);"
                            href="Persiapan_lahan.html">Persiapan Lahan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);"
                          href="Pembibitan.html">Pembibitan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);"
                          href="Penanaman.html">Penanaman</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);"
                          href="Pemeliharaan.html">Pemeliharaan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="panen.html">Panen</a></b>
                    </li>
                  </ul>
                </div>
              </div>
              
            </div>
@endsection