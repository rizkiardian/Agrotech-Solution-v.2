@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
  <h5 class="mb-4 pb-1">{{ $tahapan_budidaya_saat_ini }}</h5>

  <div class="row mb-5">
    <div class="col-lg-8">
      @foreach ($detail_tahapan as $item)
        <div class="mb-4">
          <div class="card h-100">
            <img class="card-img-top" src="{{ asset('storage/images/' . $item->gambar) }}" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title text-primary">{{ $item->waktu_pelaksanaan }} 🍀</h5>
              <h5 class="card-title">{{ $item->judul_kegiatan }}</h5>
              <p>
                {!! nl2br($item->deskripsi_kegiatan) !!}
              </p>
            </div>
          </div>
        </div>
      @endforeach
    </div>


    <div class="col-md-6 col-lg-4">
      <div class="card mb-4">
        <ul class="list-group list-group-flush">
          @foreach ($tahapan_budidaya_semuanya as $item)
            <a style="color: rgb(107, 103, 116)"
              href="{{ '/tanaman/tahapan?tanaman=' . $item->id_tanaman . '&budidaya=' . $item->id_budidaya }}">
              <li class="list-group-item">
                <b>
                  {{ $item->tahapan_budidaya }}
                </b>
              </li>
            </a>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
@endsection
