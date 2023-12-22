@extends("layout.app")

@section('title','Dashboard')

@section("content")
  <h5 class="pb-1 mb-4">Pemeliharaan</h5>

  <div class="row mb-5">
    <div class="col-lg-8 mb-4">
      <div class="card mb-3">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
              <p class="mb-4">Penyulaman</p>

              <a
                href="/pemeliharaan/?tanaman=terong&tahapan=pemeliharaan&page=1"
                class="btn btn-sm btn-outline-primary"
              >
                Baca lebih lanjut
              </a>
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img
                src="../assets/img/illustrations/man-with-laptop-light.png"
                height="140"
                alt="View Badge User"
                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                data-app-light-img="illustrations/man-with-laptop-light.png"
              />
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
              <p class="mb-4">Pengajiran</p>

              <a
                href="/pemeliharaan/?tanaman=terong&tahapan=pemeliharaan&page=2"
                class="btn btn-sm btn-outline-primary"
              >
                Baca lebih lanjut
              </a>
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img
                src="../assets/img/illustrations/man-with-laptop-light.png"
                height="140"
                alt="View Badge User"
                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                data-app-light-img="illustrations/man-with-laptop-light.png"
              />
            </div>
          </div>
        </div>
      </div>

      <div class="card mb-3">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
              <p class="mb-4">Perempelan</p>

              <a
                href="/pemeliharaan/?tanaman=terong&tahapan=pemeliharaan&page=3"
                class="btn btn-sm btn-outline-primary"
              >
                Baca lebih lanjut
              </a>
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img
                src="../assets/img/illustrations/man-with-laptop-light.png"
                height="140"
                alt="View Badge User"
                data-app-dark-img="illustrations/man-with-laptop-dark.png"
                data-app-light-img="illustrations/man-with-laptop-light.png"
              />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <div class="card mb-4">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <b>
              <a
                style="color: rgb(107, 103, 116)"
                href="Pemilihan_Tanaman.html"
              >
                Penilihan Varietas
              </a>
            </b>
          </li>
          <li class="list-group-item">
            <b>
              <a style="color: rgb(107, 103, 116)" href="Penyemaian.html">
                Penyemaian
              </a>
            </b>
          </li>
          <li class="list-group-item">
            <b>
              <a style="color: rgb(107, 103, 116)" href="Persiapan_Lahan.html">
                Persiapan Lahan
              </a>
            </b>
          </li>
          <li class="list-group-item">
            <b>
              <a style="color: rgb(107, 103, 116)" href="Penanaman.html">
                Penanaman
              </a>
            </b>
          </li>
          <li class="list-group-item">
            <b>
              <a style="color: rgb(107, 103, 116)" href="Pemeliharaan.html">
                Pemeliharaan
              </a>
            </b>
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection
