@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Persiapan Lahan</h5>

<div class="row mb-5">
  
  <div class="col-lg-8 mb-4">
    
    <div class="card h-100">
      <img class="card-img-top" src="../assets/img/elements/lombok.jpg" alt="Card image cap" />
      <div class="card-body">
        <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
        <h5 class="card-title">Persiapan Lahan</h5>
        <p class="card-text" style="text-align: justify;">
          1.	Bersihkan lahan dari gulma dan batu kerikil
          2.	Tanah dicangkul, diajak atau ditraktor dengan kedalaman 30 cm
          3.	Ulangi pengolahan tanah sampai didapat lahan olahan yang halus dan gembur
          4.	Dibuat bedengan selebar 90 cm dan Panjang bedeng disesuaikan. Jarak antar bedengan 60 cm dan tinggi bedengan 30 cm
          5.	Taburi pupuk kendang sebanyak 15 ton/ha dan kapur secukupnya (1 – 1,2 ton/ha)
          6.	Aduk rata dengan tanah
          7.	Buat saluran air di sekeliling bedengan
          8.	Taburi pupuk dasar urea, SP36, dan KCL sesuai dengan dosis.
          9.	Rapikan Kembali bedengan, bila menggunakan mulsa plastic tutup denganmulsa plastic “hitam perak” dan kunci mulsa plastic agar tidak sobek terbawa angin.
          
        </p>
      </div>
    </div>
    
    
  </div>

  <div class="col-md-6 col-lg-4">
    <div class="card mb-4">
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemilihan_Tanaman.html">Pemilihan Tanaman</a></b></li>
        <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pembibitan.html">Penyiapan benih dan pembibitan</a></b></li>
        <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Penanaman.html">Penanaman</a></b></li>
        <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemupukan.html">Pemupukan</a></b></li>
        <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemeliharaan.html">Pemeliharaan</a></b></li>
      </ul>
    </div>
  </div>
  
</div>
@endsection