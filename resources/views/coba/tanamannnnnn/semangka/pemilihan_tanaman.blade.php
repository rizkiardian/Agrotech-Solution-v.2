@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Pemilihan Tanaman</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/benih_semangka.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
                    <h5 class="card-title">Pemilihan Benih</h5>
                    <p class="card-text" style="text-align: justify;">
                      Semangka (Citrullus vulgaris Schard) merupakan salah satu tanaman hortikultura yang cukup penting di daerah tropik bahkan di daerah sub tropik karena tanaman semangka dapat memberikan keuntungan yang cukup besar. Menurut asal usulnya, tanaman semangka konon berasal dari Gurun Kalahari di Afrika, kemudian menyebar ke segala penjuru dunia, terutama di daerah tropis dan sub tropis mulai dari Jepang, Cina, Taiwan, Thailand, India, Jerman, Belanda bahkan Amerika. Kualitas buah semangka yang baik adalah buah dengan penampilan yang menarik disertai dengan kandungan gula yang tinggi. Semangka diyakini mengandung suatu senyawa yang cukup efektif dalam membunuh sel-sel kanker. Semangka juga mengandung suatu zat tertentu yang mampu meningkatkan aktivitas dan fungsi sel darah putih sehingga meningkatkan sistem keke-balan tubuh. Semangka punya keragaman varietas yang tinggi, dan dapat berdasarkan kriteria:
                      <br><br>
                      a. Keberadaan biji
                      <ul>
                        <li>	berbiji (Praya, Corina, Jenar, Kanigara, Serif Saga Agrihorti/SSA)</li>
                        <li> tidak berbiji/seedless (Marina, Wonderful, Aroma)</li>
                      </ul>
                      b. Ukuran
                      <ul>
                        <li>besar (Praya, Corina, Bali Flower)</li>
                        <li>	kecil (Santang, Inden, Dianti)</li>
                      </ul>
                      c. Pola warna kulit buah
                      <ul>
                        <li>bercorak (Nagaku, Bianca, Andromeda)</li>
                        <li>gelap (Danish, Bumaning, Winda, Legyta)</li>
                        <li>kuning (Santang, Inden, Dianti)</li>
                      </ul>
                     
                      d. Warna daging buah
                      <ul>
                        <li>merah (Topaz, Winda, Saloka)</li>
                        <li>orange/kuning (Limas, Pasport, Medali, Andromeda)</li>
                      </ul>
                  
                      
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