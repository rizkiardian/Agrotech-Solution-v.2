@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
  <div class="row mb-5">
    <h5 class="card-title text-capitalize">
      Hasil Perhitungan {{ $tanaman->nama_tanaman }}
    </h5>
    <div class="col-lg-8 order-1 mb-4">
      <div class="card h-100">
        <img class="card-img-top" src="{{ asset('images/' . $tanaman->gambar) }}" alt="Card image cap" />
        <div class="card-body">
          <h5 class="card-title fw-bold text-center">Total Pupuk Yang Dibutuhkan</h5>
          <div class="card-grid-container text-center"
            style="
              display: grid;
              grid-template-columns: repeat(3, 1fr);
              grid-gap: 15px;
            ">
            @for ($i = 0; $i < 3; $i++)
              <div class="card bg-primary mb-3 text-white">
                <div class="card-header text-capitalize">
                  {{ $pupuk[$i][0] }}
                </div>
                <div class="card-body">
                  <h5 class="card-title text-white">{{ $pupuk[$i][1] }}kg</h5>
                  <p class="card-text">{{ $pupuk[$i][2] }} karung</p>
                </div>
              </div>
            @endfor
          </div>
        </div>
      </div>
    </div>

    @for ($i = 0; $i <= 6; $i += 2)
      @if ($i == 0)
        <div class="col-lg-8 order-3" style="margin-bottom: 60px">
          <h5 class="pb-1">Tahap Dasar</h5>
          <div class="card h-100">
            <div class="card-body">
              <div class="card-grid-container text-center"
                style="
                  display: grid;
                  grid-template-columns: repeat(3, 1fr);
                  grid-gap: 15px;
                ">
                @foreach ($pupuk as $row)
                  <div class="card bg-primary mb-3 text-white">
                    <div class="card-header text-capitalize">
                      {{ $row[0] }}
                    </div>
                    <div class="card-body">
                      <h5 class="card-title text-white">
                        {{ ($row[1] * 40) / 100 }}kg
                      </h5>
                      <p class="card-text">{{ ($row[2] * 40) / 100 }} karung</p>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      @else
        <div class="col-lg-8 order-3" style="margin-bottom: 60px">
          <h5 class="pb-1">Minggu ke {{ $i }}</h5>
          <div class="card h-100">
            <div class="card-body">
              <div class="card-grid-container text-center"
                style="
                  display: grid;
                  grid-template-columns: repeat(3, 1fr);
                  grid-gap: 15px;
                ">
                @foreach ($pupuk as $row)
                  <div class="card bg-primary mb-3 text-white">
                    <div class="card-header text-capitalize">
                      {{ $row[0] }}
                    </div>
                    <div class="card-body">
                      <h5 class="card-title text-white">
                        {{ ($row[1] * 20) / 100 }}kg
                      </h5>
                      <p class="card-text">{{ ($row[2] * 20) / 100 }} karung</p>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      @endif
    @endfor

    <div class="col-md-6 col-lg-4 order-2">
      <h5 class="card-title">Hitung Pupuk</h5>
      <div class="card mb-4">
        <div class="card-body text-center">
          <img class="card-img-top" src="../assets/img/elements/pup.jpg" alt="Card image cap" />
          <p class="card-text">Menghitung kebutuhan pupuk</p>
          <a href="/perhitungan-pupuk" class="btn btn-outline-primary">
            Hitung Pupuk
          </a>
        </div>
      </div>

      <h5 class="card-title">Hitung Kebutuhan Air</h5>
      <div class="card mb-4">
        <div class="card-body text-center">
          <img class="card-img-top" src="../assets/img/elements/air.jpg" alt="Card image cap" />
          <p class="card-text">Menghitung kebutuhan air</p>
          <a href="perhitungan-air" class="btn btn-outline-primary">
            Hitung Air
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
