@extends("layout.app")

@section('title','Dashboard')

@section("content")
  <h5 class="pb-1 mb-4">Pemeliharaan</h5>

  <div class="row mb-5">
    <div class="col-lg-8 mb-4">
      <div class="card h-100">
        <img
          class="card-img-top"
          src="../assets/img/elements/pengajiran_terong.jpg"
          alt="Card image cap"
        />
        <div class="card-body">
          <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
          <h5 class="card-title">Pengajiran</h5>
          <p class="card-text" style="text-align: justify">
            Pengajiran merupakan Tindakan pemberian penopang sandaran bagi
            tanaman untuk tumbuh sesuai arah ajir dan tidak mudah rebah
            <br />
            <br />
            a. Dilakukan 7 hari setelah tanam
            <br />
            <br />
            b. Ajir terbuat dari bambu setinggi 90 cm dengan lebar 2-4 cm.
            Tancapkan ajir 5-7 cm disamping batang utama.
            <br />
            <br />
            c. Pengikatan tanaman pada ajir dilakukan pada umur 3 minggu setelah
            tanam dengan tali rafia.
          </p>
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
