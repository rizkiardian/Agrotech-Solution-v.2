@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Pemeliharaan</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/sulam semangka.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
                    <h5 class="card-title">Penyulaman tanaman semangka</h5>
                    <p class="card-text" style="text-align: justify;">
                      Penyulaman tanaman semangka dilakukan tidak lebih dari 10 hari dari penanaman tahap pertama. Hal ini bertujuan agar pertumbuhan tanaman seragam. Bibit yang terserang penyakit rebah (busuk) batang perlu dimusnahkan kemudian permukaan tanahnya dibuang dan diganti dengan tanah yang baru kemudian ditanam bibit sulaman.  Penyulaman tanaman semangka paling lambat dilakukan umur 3 hari setelah tanam (HST) sampai umur tanaman 10 hari. Tanaman semangka yang sudah terlalu tua apabila masih terus disulam mengakibatkan pertumbuhannya menjadi tidak seragam. Hal tersebut akan berpengaruh terhadap perawatan tanaman semangka serta pengendalian hama penyakit ketika berumur dewasa. 
                    </p>
                  </div>
                </div>
                
                
              </div>

              <div class="col-md-6 col-lg-4">
                <div class="card mb-4">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);"
                          href="Pemilihan_Tanaman.html">Pemilihan Tanaman</a></b></li>
                          <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);"
                            href="Persiapan_lahan.html">Persiapan Lahan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);"
                          href="Pembibitan.html">Pembibitan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);"
                          href="Penanaman.html">Penanaman</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);"
                          href="Pemeliharaan.html">Pemeliharaan</a></b></li>
                    <li class="list-group-item"><b><a style="color: rgb(107, 103, 116);" href="panen.html">Panen</a></b>
                    </li>
                  </ul>
                </div>
              </div>
              
            </div>
@endsection