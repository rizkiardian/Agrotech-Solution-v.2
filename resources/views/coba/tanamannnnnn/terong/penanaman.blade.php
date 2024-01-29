@extends("layout.app")

@section('title','Dashboard')

@section("content")
  <h5 class="pb-1 mb-4">Penananman</h5>

  <div class="row mb-5">
    <div class="col-lg-8 mb-4">
      <div class="card h-100">
        <img
          class="card-img-top"
          src="../assets/img/elements/tanam_terong.jpg"
          alt="Card image cap"
        />
        <div class="card-body">
          <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
          <h5 class="card-title">Penananman</h5>
          <p class="card-text" style="text-align: justify">
            1. Jarak tanam yang dipakai adalah double row (2 baris tanaman per
            bedengan) dengan jarak 60 cm antar tanaman dalam barisan dan 70 cm
            antar baris tanaman dengan cara tanam zig-zag.
            <br />
            2. Pemindahan secara hati-hati jangan sampai akar atau daunnya
            rusak.
            <br />
            3. Sebelum penanaman dilakukan penyiraman bedengan
            <br />
            4. Penanaman dilakukan pada bibit yang sudah berumur 1-1,5 bulan
            atau sudah mempunyai 4-5 helai daun.
            <br />
            5. Satu lubang tanam diisi satu bibit.
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
