@extends('layout.app')

@section('title', 'Dashboard')

@section('content')
  <h4 class="fw-bold mb-4 py-3">Tips Budidaya</h4>
  <h5 class="text-muted mb-4 pb-1">Berdasarkan Tahapan</h5>
  <div class="row row-cols-1 row-cols-md-3 g-4">
    @foreach ($detail_budidaya as $item)
      <div class="col-md-3 col-6">
        <div class="card h-100">
          <a href="{{ '/tanaman/tahapan?tanaman=' . $item->id_tanaman . '&budidaya=' . $item->id_budidaya }}">
            <img class="card-img-top" src="{{ asset('storage/images/' . $item->gambar_budidaya) }}" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">{{ $item->tahapan_budidaya }}</h5>
            </div>
          </a>
        </div>
      </div>
    @endforeach
  </div>
@endsection
