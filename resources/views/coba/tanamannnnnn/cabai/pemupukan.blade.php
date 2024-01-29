@extends("layout.app")

@section('title','Dashboard')

@section("content")
<h5 class="pb-1 mb-4">Pemilihan Tanaman</h5>

<div class="row mb-5">
  
  <div class="col-lg-8 mb-4">
    
    <div class="card h-100">
      <img class="card-img-top" src="../assets/img/elements/pemupukan_cabai.jpg" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title text-primary">Pemupukan🍀</h5>
        <h5 class="card-title">Pemupukan</h5>
        <p class="card-text" style="text-align: justify;">
          Pemilihan benih merupakan salah satu syarat terpenting untuk menghasilkan produktivitas tanaman kacang hijau yang berkualitas. Pemilihan benih juga dapat memberikan keuntungan berupa kemudahan dalam perawatan tanaman kacang hijau itu sendiri. Semua varietas kacang  yang telah dilepas cocok untuk ditanam di lahan sawah maupun tegalan. Varietas kacang hijau sendiri mempunyai jenis yang beragam diantaranya yang terkenal varietas unggulan (yang tahan penyakit embun tepung dan bercak daun) yaitu Sriti, Kutilang, Perkutut, Kenari, dan Murai. Selain itu juga varietas yang terkenal lainnya adalah merak, nuri, wallet, dan gelatik. Umumnya rata-rata kebutuhan benih sekitar 20 kg/ha dengan daya tumbuh 90%.
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
