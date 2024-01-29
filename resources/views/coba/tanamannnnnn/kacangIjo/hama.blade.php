@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Pengendalian Penyakit dan Hama</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/hama_hijau.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Hama Dikacang Hijau🍀</h5>
                    <h5 class="card-title"></h5>
                    <p class="card-text" style="text-align: justify;">
                      Hama yang biasa menyerang tanaman kacang hijau adalah Agromyza phaseolli (lalat kacang), penggerek polong Meruca testualitis dan Etiella zinckenella, kepik hijau Nezara viridula, kepik coklat Riptortus linearis, Plusia chalsites (ulat jengkal), dan kutu Thrips. Pengendalian hama dilakukan dengan menggunakan varietas bibit unggul yang tahan hama penyakit. Apabila serangan hama tidak dapat dikendalikan dengan cara biologi, pengendalian hama dapat dilakukan dengan penggunaan pestisida,intektisida,ungisida, dan sejenisnya. Langkah pengendalian hama dapat menggunakan insektisida, seperti: Regent, Confidor, Curacron, Furadan, Atabron, atau Pegassus dengan dosis 2–3 ml/liter air dan volume semprot 500–600 liter/ha. Lalat bibit Agromyza phaseoli di daerah endemik memerlukan cara perlakuan benih dengan menggunakan insektisida Carbosulfan (10 g/kg benih) atau Fipronil (5 cc/kg benih).
                    </p>
                  </div>
                </div>
                
                
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemilihan_Tanaman.html">Pemilihan Tanaman</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Persiapan_lahan.html">Persiapan Lahan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pembibitan.html">Pembibitan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Penanaman.html">Penanaman</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemeliharaan.html">Pemeliharaan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pengendalian_hama_penyakit.html">Pengendalian hama & penyakit</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="panen.html">Panen</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="pasca_panen.html">Pasca panen</a></b></li>
                  </ul>
                </div>
              </div>
              
            </div>
@endsection