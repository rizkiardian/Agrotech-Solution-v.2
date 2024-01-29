@extends("layout.app")

@section('title','Dashboard')

@section("content")
<h5 class="pb-1 mb-4">Pemeliharaan</h5>

<div class="row mb-5">
  
  <div class="col-lg-8 mb-4">
    
    <div class="card h-100">
      <img class="card-img-top" src="../assets/img/elements/air_hijau.jpg" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
        <h5 class="card-title">Pengairan</h5>
        <p class="card-text" style="text-align: justify;">
          Tanaman kacang hijau merupakan tanaman yang toleran terhadap kondisi kekeringan dan cocok ditanam pada musim kemarau. Meski relatif tahan terhadap kurangnya air, tanaman kacang hijau tetap memerlukan pengairan intensif terutama pada periode kritis pada waktu perkecambahan (umur 5 hari), menjelang berbunga (umur 25 hari) dan pembentukan polong (umur 45-50 hari). Apabila pada fase ini terjadi kekurangan air maka biji dan polong kacang akan kempes. Satu minggu sebelum polong dipanen, pengairan dihentikan. Pengairan diberikan melalui saluran drainase antar bedengan atau petak.
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
