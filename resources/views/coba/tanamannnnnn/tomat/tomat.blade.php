@extends("layout.app")

@section('title','Dashboard')

@section("content")
  <h4 class="fw-bold py-3 mb-4">Tips Budidaya</h4>
  <h5 class="pb-1 mb-4 text-muted">Berdasarkan Tahapan</h5>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col-md-3 col-6">
      <div class="card h-100">
        <a href="/tahapan/?tanaman=tomat&tahapan=pemilihan_tanaman">
          <img
            class="card-img-top"
            src="../assets/img/elements/pilih.jpg
                    "
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Pemilihan Tanaman</h5>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3 col-6">
      <div class="card h-100">
        <a href="/tahapan/?tanaman=tomat&tahapan=pembibitan">
          <img
            class="card-img-top"
            src="../assets/img/elements/bibit.png"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Persiapan Benih dan pembibitan</h5>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3 col-6">
      <div class="card h-100">
        <a href="/tahapan/?tanaman=tomat&tahapan=persiapan_lahan">
          <img
            class="card-img-top"
            src="../assets/img/elements/tanah.png"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Persiapan Lahan</h5>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3 col-6">
      <div class="card h-100">
        <a href="/tahapan/?tanaman=tomat&tahapan=penanaman">
          <img
            class="card-img-top"
            src="../assets/img/elements/tanam.png"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Penanaman</h5>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3 col-6">
      <div class="card h-100">
        <a href="/tahapan/?tanaman=tomat&tahapan=pemupukan">
          <img
            class="card-img-top"
            src="../assets/img/elements/pup.jpg"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Pemupukan</h5>
          </div>
        </a>
      </div>
    </div>

    <div class="col-md-3 col-6">
      <div class="card h-100">
        <a href="/tahapan/?tanaman=tomat&tahapan=pemeliharaan">
          <img
            class="card-img-top"
            src="../assets/img/elements/pelihara.png"
            alt="Card image cap"
          />
          <div class="card-body">
            <h5 class="card-title">Pemeliharaan</h5>
          </div>
        </a>
      </div>
    </div>
  </div>
@endsection