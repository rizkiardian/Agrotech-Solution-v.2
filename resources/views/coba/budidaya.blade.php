@extends("layout.app")

@section('title','Tips Budidaya')

@section("content")
  <h4 class="fw-bold py-3 mb-4">Tips Budidaya</h4>
  <h5 class="pb-1 mb-4 text-muted">Berdasarkan Tahapan</h5>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($budidaya as $row)
      <div class="col-md-3 col-6">
        <div class="card h-100">
          <a href="/tahapan-tanaman/?page={{ $row->id_detail_budidaya }}">
            <img
              class="card-img-top"
              src="../assets/img/elements/pemilihan_tanaman.png"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 class="card-title text-capitalize">
                {{ $row->tahapan_budidaya }}
              </h5>
            </div>
          </a>
        </div>
      </div>
    @endforeach
  </div>
@endsection
