@extends("layout.app")

@section('title','Dashboard')

@section("content")
  <h5 class="pb-1 mb-4">Pemeliharaan</h5>

  <div class="row mb-5">
    <div class="col-lg-8 mb-4">
      <div class="card h-100">
        <img
          class="card-img-top"
          src="../assets/img/elements/pangkas_toamt.jpg"
          alt="Card image cap"
        />
        <div class="card-body">
          <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
          <h5 class="card-title">Pemangkasan</h5>
          <p class="card-text" style="text-align: justify">
            a. Pemangkasan yaitu membuang Sebagian tanaman, cabang atau tunas
            tujuannya adalahh supaya tanaman menghasilkan buah yang cukup besar
            dan berkualitas baik. b. Pemangkasan dilakukan pada tunas-tunas liar
            yang ke luar dari ketiak daun, terutama pada tomat type
            indeterminate. c. Khusus tomat varietas unggul, pemangkasan tunas
            dilakukan berdasarkan sistem pemeliharaan batang. Tanaman yang
            dipelihara 1 batang semua tunas di ketiak daun dipangkas dan hanya
            dipelihara batang utamanya saja. Untuk tanaman tomat yang dipelihara
            batang utamanya saja. Untuk tanaman tomat yang dipeliara dua batang,
            mula-mula batang utama dibiarkan tumbuh kemudian tepat dibawah
            tandan bunga pertama dipelihara satu tunas seanjutnya tunas-tunas
            yang tumbuh di ketiak daun semuanya dipangkas. d. Waktu memangkas
            sebaiknya pagi hari pada cuaca cerah e. Pemangkasan dilakukan pula
            pada daun-daun yang berpenyakit, buah-buah yang cacat atau retak
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
                Pemilihan Tanaman
              </a>
            </b>
          </li>
          <li class="list-group-item">
            <b>
              <a style="color: rgb(107, 103, 116)" href="Pembibitan.html">
                Penyiapan benih dan pembibitan
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
              <a style="color: rgb(107, 103, 116)" href="Pemupukan.html">
                Pemupukan
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
