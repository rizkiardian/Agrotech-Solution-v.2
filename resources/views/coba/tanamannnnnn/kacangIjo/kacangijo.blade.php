@extends("layout.app")

@section('title','Dashboard')

@section("content")
<h4 class="fw-bold py-3 mb-4">Panduan Menanam Kacang Hijau</h4>
<h5 class="pb-1 mb-4 text-muted">Berdasarkan Tahapan</h5>
<div class="row row-cols-1 row-cols-md-3 g-4">

  <div class="col-md-3 col-6">
    <div class="card h-100 text-center">
      <a href="Pemilihan_Tanaman.html">
        <img class="card-img-top" src="../assets/img/elements/pilih.jpg" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">Pemilihan Tanaman</h5>
        </div>
      </a>
    </div>
  </div>

  <div class="col-md-3 col-6">
    <div class="card h-100 text-center">
      <a href="Persiapan_lahan.html">
        <img class="card-img-top" src="../assets/img/elements/tanah.png" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">Persiapan Lahan</h5>
        </div>
      </a>
    </div>
  </div>

  <div class="col-md-3 col-6">
    <div class="card h-100 text-center">
      <a href="Pembibitan.html">
        <img class="card-img-top" src="../assets/img/elements/bibit.png" style="margin-top: 40px;" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">Pembibitan</h5>
        </div>
      </a>
    </div>
  </div>

  <div class="col-md-3 col-6">
    <div class="card h-100 text-center">
      <a href="Penanaman.html">
        <img class="card-img-top" src="../assets/img/elements/tanam.png" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">Penanaman</h5>
        </div>
      </a>
    </div>
  </div>

  <div class="col-md-3 col-6">
    <div class="card h-100 text-center">
      <a href="Pemeliharaan.html">
        <img class="card-img-top" src="../assets/img/elements/pelihara.png" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">Pemeliharaan</h5>
        </div>
      </a>
    </div>
  </div>

  <div class="col-md-3 col-6">
    <div class="card h-100 text-center">
      <a href="Pengendalian_hama_penyakit.html">
        <img class="card-img-top" src="../assets/img/elements/penyakit.png" style="margin-top: 40px;" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">Pengendalian Hama dan Penyakit</h5>
        </div>
      </a>
    </div>
  </div>

  <div class="col-md-3 col-6">
    <div class="card h-100 text-center">
      <a href="panen.html">
        <img class="card-img-top" src="../assets/img/elements/pan.png" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">Panen</h5>
        </div>
      </a>
    </div>
  </div>

  <div class="col-md-3 col-6">
    <div class="card h-100 text-center">
      <a href="pasca_panen.html">
        <img class="card-img-top" src="../assets/img/elements/pascaa.png" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">Pasca Panen</h5>
        </div>
      </a>
    </div>
  </div>

</div>
@endsection
