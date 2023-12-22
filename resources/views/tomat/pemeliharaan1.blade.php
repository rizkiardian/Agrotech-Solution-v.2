@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Pemeliharaan</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/turus_tomat.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
                    <h5 class="card-title">Pemasangan turus (lanjaran)</h5>
                    <p class="card-text" style="text-align: justify;">
                      a.	Seawall mungkin dilakukan pemasangan turus atau lanjaran setinggi kurang lebih 100 -225 cm dari bahan bilah – bilah bambu.
                      b.	Pemasangan turus dapat berbentuk segitiga, atau tegak lurus.
                      c.	Satu tanaman dipasang satu turus, kemudian diikat dengan tali yang cukup kuat.
                      d.	Keuntungan pemasangan turus antara lain :
                      •	Memperbaiki penyebaran pertumbuhan daun dan tunas
                      •	Mempermudah penyiangan dan mengurangi kerusakan fisik tanaman pada waktu pemeliharaan


                    </p>
                  </div>
                </div>
                
                
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemilihan_Tanaman.html">Pemilihan Tanaman</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pembibitan.html">Penyiapan benih dan pembibitan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Penanaman.html">Penanaman</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemupukan.html">Pemupukan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemeliharaan.html">Pemeliharaan</a></b></li>
                  </ul>
                </div>
              </div>
              
            </div>
@endsection