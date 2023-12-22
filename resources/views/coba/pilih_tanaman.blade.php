@extends("layout.app")

@section('title','Pilih Tanaman')

@section("content")
  <h4 class="fw-bold py-3 mb-4">Pilih Tanaman</h4>
  <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
    @foreach ($tanaman as $row)
      <a href="/budidaya-tanaman/?page={{ $row->id_tanaman }}">
        <div class="col">
          <div class="card">
            <img
              class="card-img-top"
              src="{{ asset("storage/images/" . $row->gambar) }}"
              alt="Card image cap"
            />
            <div class="card-body">
              <h5 class="card-title text-capitalize">
                {{ $row->nama_tanaman }}
              </h5>
            </div>
          </div>
        </div>
      </a>
    @endforeach
  </div>
@endsection
