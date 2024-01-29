@extends("layout.app")

@section('title','Dashboard')

@section("content")
<h5 class="pb-1 mb-4">Pemupukan Susulan</h5>

<div class="row mb-5">
  
  <div class="col-lg-8 mb-4">
    
    <div class="card h-100">
      <img class="card-img-top" src="../assets/img/elements/pemupukan2.png" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
        <h5 class="card-title">Pemupukan Susulan</h5>
        <p class="card-text" style="text-align: justify;">
          Pemupukan susulan dapat dilakukan pada umur 20 hari setelah tanam dengan dosis 50 kg/ Ha urea. Serta untuk meningkatkan prosuksi kedelai dapat diberikan Zat Pengatur Pertumbuhan (ZPT) dan Pupuk Pelengkap Cairan (PPC) sesuai dosis yang dianjurkan.

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
