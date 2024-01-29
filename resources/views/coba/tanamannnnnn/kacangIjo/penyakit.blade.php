@extends("layout.app")

@section('title','Dashboard')

@section("content")
<h5 class="pb-1 mb-4">Pengendalian Penyakit dan Hama</h5>

<div class="row mb-5">
  
  <div class="col-lg-8 mb-4">
    
    <div class="card h-100">
      <img class="card-img-top" src="../assets/img/elements/sakit_hijau.jpg" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title text-primary">Penyakit Dikacang Hijau🍀</h5>
        <h5 class="card-title"></h5>
        <p class="card-text" style="text-align: justify;">
          Penyakit yang umum terjadi pada tanaman kacang hijau yaitu Cercospora Canescens (bercak daun), Erysiphe polygoni (embun tepung), Scierotium rolfsii (busuk batang), dan penyakit puru Elsinoe glycines. Pengendalian penyakit dilakukan dengan cara biologi yaitu menanam varietas yang tahan penyakit dan menggunakan fungisida untuk penyemprotan. Penyemprotan fungisida dapat menggunakan bahan seperti: Benlate, Dithane M-45, Baycor, Delsene MX 200 atau Daconil pada awal serangan dengan dosis 2 g/l air. Penyakit embun tepung Erysiphe polygoni sangat efektif dikendalikan dengan fungisida hexakonazol yang diberikan pada umur 4 dan 6 minggu. Penyakit bercak daun dapat diatasi secara maksimal menggunakan fungisida hexakonazol yang diberikan pada umur 4, 5, dan 6 minggu.
        </p>
      </div>
    </div>
    
    
  </div>

  <div class="col-md-6 col-lg-4">
    <div class="card mb-4">
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemilihan_Tanaman.html">Pemilihan Tanaman</a></b></li>
        <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Persiapan_lahan.html">Persiapan Lahan</a></b></li>
        <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pembibitan.html">Pembibitan</a></b></li>
        <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Penanaman.html">Penanaman</a></b></li>
        <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemeliharaan.html">Pemeliharaan</a></b></li>
        <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pengendalian_hama_penyakit.html">Pengendalian hama & penyakit</a></b></li>
        <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="panen.html">Panen</a></b></li>
        <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="pasca_panen.html">Pasca panen</a></b></li>
      </ul>
    </div>
  </div>
  
</div>
@endsection
