@extends("layout.app")

@section('title','Dashboard')

@section("content")
<h5 class="pb-1 mb-4">Pemeliharaan</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/pupuk_hijau.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Pemupukan🍀</h5>
                    <h5 class="card-title"></h5>
                    <p class="card-text" style="text-align: justify;">
                      Pemupukan dilakukan pada lahan kering dan lahan yang kurang subur sedangkan pada lahan sawah bekas tanaman padi yang subur tidak perlu dilakukan pemupukan. Pada lahan kering, pemupukan menggunakan jenis pupuk NPK. Pemupukan pada lahan yang kurang subur dilakukan dengan menggunakan komposisi pupuk 45-50 kg Urea + 45 – 90 kg TSP + 50 kg KCL/ha. Berikutnya pupuk dimasukkan ke dalam lubang tugal sedalam 10 cm yang telah dibuat di sisi yang berlawanan dengan pemupukan pertama atau dapat pula dimasukkan ke dalam larikan kemudian ditutup dengan tanah tipis. Selain itu, pemberian pupuk organik seperti kompos atau pupuk kandang dapat digunakan untuk membantu menahan kapasitas air di dalam tanah.
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
