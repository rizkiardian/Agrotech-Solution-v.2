@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Hasil Deteksi</h5>

<div class="row mb-5">
  
  <div class="col-lg-8 mb-4">                
    <div class="card h-100">
      <img class="card-img-top" src="../assets/img/elements/kon.jpg" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title">Penanaman</h5>
        <p class="card-text" style="text-align: justify;">
          Bibit yang sudah tumbuh daun sejati sejumlah empat helai siap dipindah ke lahan. Satu lubang tanam untuk satu bibit. Menanam semangka sebaiknya dilakukan saat pagi hari sebelum jam 10.00 WIB atau sore hari setelah jam 15.00 WIB untuk menghindari tanaman mengalami stress tinggi akibat sengatan terik matahari.
        </p>
      </div>
    </div>               
  </div>

  <div class="col-md-6 col-lg-4">
    <h5 class="pb-1 mb-4">Deteksi Hama dan Penyakit</h5>
    <div class="card mb-4">
      <div class="card-body text-center ">
        <img class="card-img-top" src="../assets/img/elements/22.jpg" alt="Card image cap" style="border-radius: 10px;"/>
        
        <a href="javascript:void(0)" class="btn btn-primary mt-3">Deteksi Lagi</a>
      </div>
    </div>
  </div>
  
</div>
@endsection

