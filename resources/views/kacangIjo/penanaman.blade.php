@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Penanaman</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/hijau.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Penanaman 🍀</h5>
                    <h5 class="card-title">Penanaman</h5>
                    <p class="card-text" style="text-align: justify;">
                      Penanaman dilakukan menggunakan sistem tugal yaitu melubangi tanah dengan jarak yang sesuai. Pada bekas lahan tanaman padi, penanaman kacang hijau tidak boleh dilakukan lebih dari 5 hari sesudah padi dipanen. 
Berikut cara penanaman tanaman kacang hijau yang dianjurkan :
<br><br>
1.	Melubangi tanah yang telah disiapkan dengan kedalaman 3-5 cm.

<br>2.	Memberi jarak tanam. Disarankan untuk jarak tanam yaitu 40 x 10 cm tiap lubang untuk mencapai populasi 400–500 ribu tanaman/ha (pada musim kemarau) ataupun 40 x 15 cm tiap lubang untuk mencapai populasi 300–400 ribu tanaman/ha (pada musim hujan).
<br>3.	Memasukkan benih tanaman kacang hijau. Banyak benih kacang hijau yang dianjurkan adalah 2-4 biji pada setiap lubang.
<br>4.	Setiap lubang di beri pupuk organik dan urea atau PPC sebagai pupuk tambahan untuk membantu pertumbuhan kacang hijau.
<br>5.	Menutup lubang dengan memadatkan tanah, hal ini bertujuan agar tanaman kacang hijau tidak mudah dimasuki hama.

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