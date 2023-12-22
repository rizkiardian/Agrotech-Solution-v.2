@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Penanaman</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/tanam_delai.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
                    <h5 class="card-title">Penanaman</h5>
                    <p class="card-text" style="text-align: justify;">
                      Pada penanaman benih atau biji bisa langsug ditanam pada lahan dengan cara membuat lubang pada lahan dengan kedalaman 3 cm dan jarak menyesuaikan kondisi tanah. Pada setiap lubang dapat dimasukkan 2 benih kedelai yang ditutup dengan tanah tipis.                     
                    </p>
                  </div>
                </div>
                
                
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemilihan_Tanaman.html">Pemilihan Tanaman</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pengolahan tanah.html">Pengolahan tanah</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Penanaman.html">Penanaman</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Pemeliharaan.html">Pemeliharaan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="Hama.html">Pengendalian hama & penyakit</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="panen.html">Panen</a></b></li>
                  </ul>
                </div>
              </div>
              
              
            </div>
@endsection