@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Pemilihan Tanaman</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/terong_benih.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
                    <h5 class="card-title">Pemilihan Benih</h5>
                    <p class="card-text" style="text-align: justify;">
                      a. Terong Ungu (Solanum melongena var. domestica): Varian terong dengan kulit ungu pekat dan daging yang lembut. Terong ungu memiliki rasa yang khas dan biasanya digunakan dalam berbagai hidangan, termasuk tumis, gulai, atau direbus.

                      <br>b. Terong Hijau (Solanum melongena var. esculentum): Varian terong dengan kulit hijau dan bentuk yang silindris atau lonjong. Terong hijau sering digunakan dalam masakan Asia, seperti cap cay, tumis, atau sayur lodeh.
                      
                      <br>c. Terong Keriting (Solanum melongena var. serpentinum): Varian terong dengan kulit yang keriting atau bergelombang. Terong keriting umumnya digunakan dalam masakan seperti tumis, sayur, atau acar.
                      
                      <br>d. Terong Balado (Solanum melongena var. cumini): Varian terong yang berasal dari Sumatera Barat, Indonesia. Terong Balado memiliki ukuran sedang hingga besar, kulit tipis, dan biasanya digunakan dalam masakan khas Sumatera Barat seperti sambal balado.
                    </p>
                  </div>
                </div>
                
                
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemilihan_Tanaman.html">Penilihan Varietas</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Penyemaian.html">Penyemaian</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Persiapan_Lahan.html">Persiapan Lahan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Penanaman.html">Penanaman</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemeliharaan.html">Pemeliharaan</a></b></li>                   
                  </ul>
                </div>
              </div>
              
            </div>
@endsection