@extends("layout.app")

@section('title','Dashboard')

@section("content")
  <h5 class="pb-1 mb-4">Penyiapan benih dan pembibitan</h5>

  <div class="row mb-5">
    <div class="col-lg-8 mb-4">
      <div class="card h-100">
        <img
          class="card-img-top"
          src="../assets/img/elements/tomat_benih.jpg"
          alt="Card image cap"
        />
        <div class="card-body">
          <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
          <h5 class="card-title">Pembeninahan</h5>
          <p class="card-text" style="text-align: justify">
            Kebutuhan benih tomat untuk lahan 1 hektar berkisar antara 300 – 500
            gram, dengan daya kecambah 75%. Buah tomat yang akan diambil bijinya
            untuk benih harus memenuhi kriteria berikut : 1. Berasal dari
            tanaman yang sehat dan pertumbuhannya subur 2. Buah dipilih dan
            disortir sejak masih di pohon 3. Buahnya masak pohon, sehat, dan
            tidak rusak Langkah-langkah penyiapan benih 1. Sebelum biji diambil
            dari buahnya, buah sebaiknya diperam dahulu selama 3 hari sampai
            buahnya merah, gelap dan lunak 2. Setelah itu biji dari buah
            dikeluarkan 3. Biji yang berlampir lendir difermentasikan selama 3
            hari sehingga air dan lendir terpisah 4. Setelah air dan lendir
            terpisah dari biji langkah selanjutnya yaitu mencuci dengan air
            bersih 5. Biji yang telah bersih lalu dijemur kurang lebih 3 hari
            lalu disimpan.
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
