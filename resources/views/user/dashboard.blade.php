@extends("layout.app")

@section('title','Dashboard')

@section("content")
  <div class="col mb-4 order-0">
    <div class="card" style="background-color: #e7e7ff">
      <div class="d-flex align-items-end row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary">
              Selamat datang di website AgroTech
              <span class="text-capitalize">
                {{ session("user")["nama_user"] }}
              </span>
              !! 🍀
            </h5>
            <p class="mb-4">
              Kami adalah website terpercaya untuk mendapatkan tips, informasi
              terkini mengenai budidaya dan perencanaan pertanian
            </p>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-4">
            <img
              src="../assets/img/elements/333.png"
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

  <!-- Examples -->
  <h5 class="pb-1 mb-4"><b>Fitur Unggulan Kami</b></h5>
  <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
    <div class="col">
      <a href="{{ route("tanaman") }}">
        <div class="card h-100" style="background-color: #ffd6a5">
          <img
            class="card-img"
            src="../assets/img/elements/tips.png"
            alt="Card image cap"
          />
          <div class="card p-3 text-center" style="background-color: #ffd6a5">
            <h5 class="card-title">Tips Budidaya</h5>
          </div>
        </div>
      </a>
    </div>

    <div class="col">
      <a href="{{ route("perencanaan") }}">
        <div class="card h-100" style="background-color: #9b8bdb">
          <img
            class="card-img"
            src="../assets/img/elements/444.png"
            alt="Card image cap"
          />
          <div class="card p-3 text-center" style="background-color: #9b8bdb">
            <h5 class="card-title">Perencanaan</h5>
          </div>
        </div>
      </a>
    </div>

    <div class="col">
      <a href="{{ route("chatbot") }}">
        <div class="card h-100" style="background-color: #a3ed8d">
          <img
            class="card-img"
            src="../assets/img/elements/666.png"
            alt="Card image cap"
          />
          <div class="card p-3 text-center" style="background-color: #a3ed8d">
            <h5 class="card-title">Tani AI</h5>
          </div>
        </div>
      </a>
    </div>
  </div>

  <div class="row mb-5">
    <div class="col-md-9 col-lg-8">
      <div class="card h-100">
        <h5 class="m-3">
          <b>Mari Menanam 🌿</b>
        </h5>
        <h6 class="mx-3 text-muted">Pilih Tanaman sesuai minat anda</h6>
        <div class="card-body">
          <ul class="p-0 m-0">
            <li class="d-flex mb-4 pb-1">
              <div class="flex-shrink-0 me-3">
                <img
                  src="../assets/img/icons/unicons/1.png"
                  alt="User"
                  class="rounded"
                />
              </div>
              <div
                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
              >
                <div class="me-2">
                  <h5 class="mb-0">Cabai</h5>
                  <small class="text-muted d-block mb-1">
                    Tanaman dengan cita rasa pedas
                  </small>
                </div>
                <div class="user-progress d-flex align-items-center gap-1">
                  <a
                  href="budidaya/?budidaya=cabai"
                    class="btn btn-sm btn-outline-primary"
                  >
                    Baca Lebih Lanjut
                  </a>
                </div>
              </div>
            </li>
            <li class="d-flex mb-4 pb-1">
              <div class="flex-shrink-0 me-3">
                <img
                  src="../assets/img/icons/unicons/tomat.png"
                  alt="User"
                  class="rounded"
                />
              </div>
              <div
                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
              >
                <div class="me-2">
                  <h6 class="mb-0">Tomat</h6>
                  <small class="text-muted d-block mb-1">
                    Tanaman yang baik untuk kesehatan kulit
                  </small>
                </div>
                <div class="user-progress d-flex align-items-center gap-1">
                  <a
                    href="budidaya/?budidaya=tomat"
                    class="btn btn-sm btn-outline-primary"
                  >
                    Baca Lebih Lanjut
                  </a>
                </div>
              </div>
            </li>
            <li class="d-flex mb-4 pb-1">
              <div class="flex-shrink-0 me-3">
                <img
                  src="../assets/img/icons/unicons/kacang.png"
                  alt="User"
                  class="rounded"
                />
              </div>
              <div
                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
              >
                <div class="me-2">
                  <h6 class="mb-0">Kacang Ijo</h6>
                  <small class="text-muted d-block mb-1">
                    Tanaman yang enak
                  </small>
                </div>
                <div class="user-progress d-flex align-items-center gap-1">
                  <a
                    href="budidaya/?budidaya=kacangijo"
                    class="btn btn-sm btn-outline-primary"
                  >
                    Baca Lebih Lanjut
                  </a>
                </div>
              </div>
            </li>
            <li class="d-flex mb-4 pb-1">
              <div class="flex-shrink-0 me-3">
                <img
                  src="../assets/img/icons/unicons/semangka.png"
                  alt="User"
                  class="rounded"
                />
              </div>
              <div
                class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
              >
                <div class="me-2">
                  <h6 class="mb-0">Semangka</h6>
                  <small class="text-muted d-block mb-1">
                    Tanaman yang banyak airnya
                  </small>
                </div>
                <div class="user-progress d-flex align-items-center gap-1">
                  <a
                    href="budidaya/?budidaya=semangka"
                    class="btn btn-sm btn-outline-primary"
                  >
                    Baca Lebih Lanjut
                  </a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4">
      <h5 class="pb-1 mb-2"><b>Solusi Untuk Masalah Hama</b></h5>
      <div class="card mb-4 text-center" style="background-color: #1fc28d">
        <img
          class="card-img-top"
          src="../assets/img/elements/555.png"
          alt="Card image cap"
        />
        <div class="card-body" style="background-color: #1fc28d">
          <h5 class="card-title" style="color: white">Deteksi Hama</h5>
          <p class="card-text" style="color: #cecedf">
            Mengetahui Jenis Hama Dengan Mudah
          </p>
          <a
            href="{{ route("deteksi_hama") }}"
            class="btn btn"
            style="background-color: #e7e7ff; color: #9494f3"
          >
            <b>Coba Sekarang</b>
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
