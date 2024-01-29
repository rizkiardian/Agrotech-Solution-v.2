@extends('layout.app')

@section('title', 'Pilih Tanaman')

@section('content')
  <div class="container-xxl flex-grow-1 container-p-y" style="margin-top: -30px">
    <h4 class="fw-bold mb-4 py-3">Pilih Tanaman</h4>
    <div class="row row-cols-1 row-cols-md-3 g-4 mb-4">
      @foreach ($tanaman as $item)
        <a href="{{ '/tanaman/budidaya?tanaman=' . $item->id_tanaman }}">
          <div class="col">
            <div class="card">
              <img class="card-img-top" src="{{ asset('storage/images/' . $item->gambar) }}" alt="Card image cap" />
              <div class="card-body">
                <h5 class="card-title">{{ $item->nama_tanaman }}</h5>
              </div>
            </div>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endsection
