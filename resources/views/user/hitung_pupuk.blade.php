@extends("layout.app")

@section('title','Perencanaan Pupuk')

@section("content")
  <div class="col">
    <div class="card mb-4">
      <form method="POST" action="hasil-pupuk">
        @csrf
        <h5 class="card-header">Hitung Kebutuhan Pupuk</h5>
        <div class="card-body">
          <div class="mb-3">
            <label for="exampleFormControlSelect1" class="form-label">
              Pilih Tanaman
            </label>
            <select
              class="form-select"
              id="exampleFormControlSelect1"
              aria-label="Default select example"
              name="pilih_tanaman"
            >
              <option selected disabled>Pilih</option>
              @foreach ($tanaman as $row)
                <option value="{{ $row->id_tanaman }}">
                  {{ $row->nama_tanaman }}
                </option>
              @endforeach
            </select>
            <div>
              @error("pilih_tanaman")
                <span>{{ $message }}</span>
              @enderror
            </div>
          </div>

          <div>
            <label for="exampleFormControlSelect1" class="form-label">
              Luas Lahan
            </label>
            <div class="input-group">
              <input
                type="number"
                step="0.1"
                min="0"
                class="form-control"
                aria-label="Text input with dropdown button"
                name="luas_lahan"
                value="{{ old("luas_lahan") }}"
              />
              <select
                class="btn btn-outline-primary dropdown-toggle"
                name="satuan_lahan"
              >
                <option value="hektar">Hektar</option>
                <option value="meter">Meter</option>
              </select>
            </div>
            <div>
              @error("luas_lahan")
                <span>{{ $message }}</span>
              @enderror
            </div>
          </div>

          <div class="mb-3 mt-3">
            <label for="exampleFormControlSelect1" class="form-label">
              Nitrogen(N)
            </label>
            <select
              class="form-select"
              id="exampleFormControlSelect1"
              aria-label="Default select example"
              name="nitrogen"
            >
              <option selected disabled>Pilih</option>
              <option value="urea">Urea</option>
              <option value="ZA">ZA</option>
            </select>
            <div>
              @error("nitrogen")
                <span>{{ $message }}</span>
              @enderror
            </div>
          </div>

          <div class="mb-3 mt-3">
            <label for="exampleFormControlSelect1" class="form-label">
              Fosfor(P)
            </label>
            <select
              class="form-select"
              id="exampleFormControlSelect1"
              aria-label="Default select example"
              name="fosfor"
            >
              <option selected disabled>Pilih</option>
              <option value="TSP">TSP</option>
              <option value="SP36">SP36</option>
            </select>
            <div>
              @error("fosfor")
                <span>{{ $message }}</span>
              @enderror
            </div>
          </div>

          <div class="mb-3 mt-3">
            <label for="exampleFormControlSelect1" class="form-label">
              Kalium(K)
            </label>
            <select
              class="form-select"
              id="exampleFormControlSelect1"
              aria-label="Default select example"
              name="kalium"
            >
              <option selected disabled>Pilih</option>
              <option value="KCL">KCL</option>
              <option value="MOP">MOP</option>
            </select>
            <div>
              @error("kalium")
                <span>{{ $message }}</span>
              @enderror
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Hitung</button>
        </div>
      </form>
    </div>
  </div>
@endsection
