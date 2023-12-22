@extends("layout.app")

@section('title','Dashboard')

@section("content")
  <h5 class="pb-1 mb-4">Pemupukan</h5>

  <div class="row mb-5">
    <div class="col-lg-8 mb-4">
      <div class="card h-100">
        <img
          class="card-img-top"
          src="../assets/img/elements/pemupukan_tomat.jpg"
          alt="Card image cap"
        />
        <div class="card-body">
          <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
          <h5 class="card-title">Pemupukan</h5>
          <p class="card-text" style="text-align: justify">
            Pupuk yang diberikan adalahh urea 200 kg/ha, SP-36 250 kg/ha dan KCI
            100 kg/ha. Pemberian pupuk urea dan KCI sebelum atau saat tanam
            dengan dosis setengahnya, sedangkan SP-36 seluruh dosis. Pupuk
            susulan (setengah dosis Urea dan KCI) diberikan lagi pada umur 25 –
            30 hari setelah tanam. Pupuk SP-36 bila tidak terdapat dilapangan
            dapat diganti dengan pupuk fosfat alam akan tetapi dosisnya lebih
            tinggi 300 – 350 kg/ha. Pemberian fosfat alam minimal 1 minggu
            sebelum tanam.
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
