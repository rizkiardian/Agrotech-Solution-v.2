@extends("layout.app")

@section('title','Dashboard')

@section("content")
<h4 class="fw-bold py-3 mb-4">Panduan Menanam Cabai</h4>
<h5 class="pb-1 mb-4 text-muted">Berdasarkan Tahapan</h5>
<div class="row row-cols-1 row-cols-md-3 g-4">

  <div class="col-md-3 col-6" >
    <div class="card h-100">
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
      <a href="Penyemaian.html">
        <img class="card-img-top" src="../assets/img/elements/semai.png" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">Penyemaian Benih</h5>
        </div>
      </a>
    </div>
  </div>

  <div class="col-md-3 col-6">
    <div class="card h-100 text-center">
      <a href="Pengolahan tanah.html">
        <img class="card-img-top" src="../assets/img/elements/tanah.png" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">Pengolahan Tanah dan Penanaman</h5>
        </div>
      </a>
    </div>
  </div>

  <div class="col-md-3 col-6">
    <div class="card h-100 text-center">
      <a href="Perawatan.html">
        <img class="card-img-top" src="../assets/img/elements/perawatan.png" style="margin-top: 40px;" alt="Card image cap"/>
        <div class="card-body">
          <h5 class="card-title">Perawatan</h5>
        </div>
      </a>
    </div>
  </div>

  <div class="col-md-3 col-6">
    <div class="card h-100 text-center">
      <a href="Pemupukan.html">
        <img class="card-img-top" src="../assets/img/elements/pemupukan.png" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title">Pemupukan</h5>
        </div>
      </a>
    </div>
  </div>

  <div class="col-md-3 col-6">
    <div class="card h-100 text-center">
      <a href="Pengendalian_hama_penyakt.html">
        <img class="card-img-top" src="../assets/img/elements/penyakit.png" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title " style="margin-top: 40px;">Pengendalian Hama dan Penyakit</h5>
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
