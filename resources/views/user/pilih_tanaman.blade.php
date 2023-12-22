@extends("layout.app")

@section('title','Pilih Tanaman')

@section("content")
  <div
    class="container-xxl flex-grow-1 container-p-y"
    style="margin-top: -30px"
  >
    <h4 class="fw-bold py-3 mb-4">Pilih Tanaman</h4>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
      <a href="budidaya/?budidaya=kedelai">
        <div class="col">
          <div class="card">
            <img
              class="card-img-top"
              src="../assets/img/elements/kedele.png"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 class="card-title">Kedelai</h5>
            </div>
          </div>
        </div>
      </a>
      <a href="budidaya/?budidaya=tomat">
        <div class="col">
          <div class="card">
            <img
              class="card-img-top"
              src="../assets/img/elements/tomat.png"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 class="card-title">Tomat</h5>
            </div>
          </div>
        </div>
      </a>
      <a href="budidaya/?budidaya=terong">
        <div class="col">
          <div class="card">
            <img
              class="card-img-top"
              src="../assets/img/elements/terongg.png"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 class="card-title">Terong</h5>
            </div>
          </div>
        </div>
      </a>
      <a href="budidaya/?budidaya=cabai">
        <div class="col">
          <div class="card">
            <img
              class="card-img-top"
              src="../assets/img/elements/cabe.png"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 class="card-title">Cabai</h5>
            </div>
          </div>
        </div>
      </a>
      <a href="budidaya/?budidaya=semangka">
        <div class="col">
          <div class="card">
            <img
              class="card-img-top"
              src="../assets/img/elements/semangkaa.png"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 class="card-title">Semangka</h5>
            </div>
          </div>
        </div>
      </a>
      <a href="budidaya/?budidaya=kacangijo">
        <div class="col">
          <div class="card">
            <img
              class="card-img-top"
              src="../assets/img/elements/kacang_ijo.png"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 class="card-title">Kacang Ijo</h5>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
@endsection
