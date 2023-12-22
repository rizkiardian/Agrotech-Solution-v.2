@extends("layout.app")

@section('title','Dashboard')

@section("content")
  <h5 class="pb-1 mb-4">Penyiraman</h5>

  <div class="row mb-5">
    <div class="col-lg-8 mb-4">
      <div class="card h-100">
        <img
          class="card-img-top"
          src="../assets/img/elements/penyirman1.jpg"
          alt="Card image cap"
        />
        <div class="card-body">
          <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
          <h5 class="card-title">Penyiraman</h5>
          <p class="card-text" style="text-align: justify">
            Penyiraman dapat dilakukan pada pagi dan sore hari. Pada umur 0-5
            hari tanaman kedelai membutuhkan air untul perkecambahannya, tahap
            awal generatif yaitu 15-20 hari, tahap pembungaan dan pembentukan
            benih pada umur 35-65 hari. Penyiraman dilakukan agar menghindari
            tanah kering atau berlumpur.
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
              <a style="color: rgb(107, 103, 116)" href="Pengolahan tanah.html">
                Pengolahan tanah
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
              <a style="color: rgb(107, 103, 116)" href="Hama.html">
                Pengendalian hama & penyakit
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
