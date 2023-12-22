@extends("layout.app")

@section('title','Tahap')

@section("content")
  <h5 class="pb-1 mb-4 text-capitalize">
    Tahapan {{ $budidaya->tahapan_budidaya }}
  </h5>

  <div class="row mb-5">
    <div class="col-lg-8 mb-4">
      @foreach ($tahapan as $row)
        <div class="card mb-3">
          <div class="d-flex align-items-end row">
            <div class="col-sm-7">
              <div class="card-body">
                <h5 class="card-title text-primary">
                  {{ $row->waktu_pelaksanaan }} 🍀
                </h5>
                <p class="mb-4">
                  {{ $row->judul_kegiatan }}
                </p>

                <a href="javascript:;" class="btn btn-sm btn-outline-primary">
                  Baca lebih lanjut
                </a>
              </div>
            </div>
            <div class="col-sm-5 text-center text-sm-left">
              <div class="card-body pb-0 px-0 px-md-4">
                <img
                  src="{{ asset("storage/images/" . $row->gambar) }}"
                  height="140"
                  alt="View Badge User"
                  data-app-dark-img="illustrations/man-with-laptop-dark.png"
                  data-app-light-img="illustrations/man-with-laptop-light.png"
                />
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="col-md-6 col-lg-4">
      <h6 class="mt-2 text-muted">List Tahapan</h6>
      <div class="card mb-4">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Pemilihhan Tanamanan</li>
          <li class="list-group-item">Penanaman</li>
          <li class="list-group-item">Pelatihan Tanaman</li>
          <li class="list-group-item">Pemantauan</li>
          <li class="list-group-item">Persiapan Lahan</li>
          <li class="list-group-item">Pemupukan</li>
          <li class="list-group-item">Tindakan Pencegahan</li>
          <li class="list-group-item">Panen</li>
          <li class="list-group-item">Pasca panen</li>
        </ul>
      </div>
    </div>
  </div>
@endsection
