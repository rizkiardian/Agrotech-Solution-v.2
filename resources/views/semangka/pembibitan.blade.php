@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Pembibitan</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/semangka_kecil.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
                    <h5 class="card-title">Pembibitan</h5>
                    <p class="card-text" style="text-align: justify;">
                      Persiapan pembibitan untuk menanam semangka membutuhkan tempat semai benih untuk melindungi bibit muda. Sediakan media semai dengan komposisi 10 liter pupuk kandang, 20 liter tanah, dan 150 gram pupuk NPK halus. Campur media tersebut lalu masukkan ke dalam tempat semai. Setelah menyediakan media semai, ikuti langkah untuk menyiapkan bibit semangka sebagai berikut. Benih semangka direndam selama 8-12 jam lalu ditiriskan. Masukkan benih ke dalam kantong plastik ukuran 1 kg. Tiup dan ikat kantong plastik dengan karet. Benih semangka akan berkecambah setelah tiga sampai empat hari. Media semai disiram secukupnya. Benih terpilih yang sudah muncul akan langsung disemai dalam polybag ukuran 1-1,5 cm. Kantong persemaian diletakkan berderet agar terkena sinar matahari penuh. Beri plastik transparan dengan salah satu ujung/pinggirnya terbuka.
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