@extends("layout.app")

@section('title','Dashboard')

@section("content")
  <h5 class="pb-1 mb-4">Pemiliharaan</h5>

  <div class="row mb-5">
    <div class="col-lg-8 mb-4">
      <div class="card h-100">
        <img
          class="card-img-top"
          src="../assets/img/elements/pemupukan_semangka.jpg"
          alt="Card image cap"
        />
        <div class="card-body">
          <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
          <h5 class="card-title">Pupuk tambahan</h5>
          <p class="card-text" style="text-align: justify">
            Pupuk tambahan yang diberikan pada tanaman semangka pada umur 25
            hari setelah tanam adalah pupuk daun dan pupuk siram dengan
            kandungan nitrogen yang tinggi. Pupuk daun yang digunakan adalah
            jenis multimikro dengan dosis 2 cc/liter dan campuran ZA + NPK
            (15:15:15). Pupuk tersebut dicairkan dengan perbandingan 1:1, yaitu
            5 gram per liter air. Fase generatif dan pembuahan dengan pemberian
            NPK 10 gram per liter dicairkan dan disiramkan sebanyak 250 ml per
            lubang tanaman. Pada fase pembesaran dan peningkatan kadar gula buah
            (45-55 hari setelah tanam) diberikan tambahan pupuk KNO3 sejumlah
            10-15 gram per liter dan dicairkan. Siram pupuk sebanyak 250 ml pe
            rlubang tanaman.
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
              <a style="color: rgb(107, 103, 116)" href="Persiapan_lahan.html">
                Persiapan Lahan
              </a>
            </b>
          </li>
          <li class="list-group-item">
            <b>
              <a style="color: rgb(107, 103, 116)" href="Pembibitan.html">
                Pembibitan
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
          <li class="list-group-item">
            <b>
              <a style="color: rgb(107, 103, 116)" href="panen.html">Panen</a>
            </b>
          </li>
        </ul>
      </div>
    </div>
  </div>
@endsection
