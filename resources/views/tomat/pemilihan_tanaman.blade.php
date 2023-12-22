@extends("layout.app")

@section('title','Dashboard')

@section("content")
  <h5 class="pb-1 mb-4">Pemilihan Tananaman</h5>

  <div class="row mb-5">
    <div class="col-lg-8 mb-4">
      <div class="card h-100">
        <img
          class="card-img-top"
          src="../assets/img/elements/benih_tomat.jpg"
          alt="Card image cap"
        />
        <div class="card-body">
          <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
          <h5 class="card-title">Pemilihan Bibit</h5>
          <p class="card-text" style="text-align: justify">
            Beberapa jenis tomat yang dikenal berdasaran bentuk buahnya, tanaman
            tomat komersil dapat dibedakan beberapa type : 1. Tomat biasa Bentuk
            buahnya bulat pipih, tidak teratur, sedikit beralur-alur terutama
            dekat dengan tangkainya. Jenis tomat ini sangat cocok ditanam di
            daerah dataran rendah. 2. Tomat apel Bentuk buahnya bulat, kuat,
            sedikit keras menyerupai buah apel. Tanaman ini cocok di dataran
            pegunungan. 3. Tomat kentang Buahnya berbentuk bulat, besar, padat,
            menyerupai buah apel hanya agak kecil sedikit dan daunnya
            lebar-lebar. 4. Tomat keriting Buahnya berbentuk agak lonjong keras
            seperti alpukat atau papaya. Tomat ini disebut tomat gondol, yang
            disenangi karena kulitnya tebal, sehingga tahan pengangkutan jarak
            jauh. Daunnya rimbun keriting seperti terserang oleh penyakit virus
            keriting dan berwarna hijau kelam. Varietas unggul tomat yang
            dilepas antara lain yaitu : 1. Intan 2. Ratna 3. Berlian Ketiga
            varietas tersebut dapat dipakai untuk tomat industry pengolahan dan
            beradaptasi baik di dataran rendah serta toleran terhadap layu
            bakteri.
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
