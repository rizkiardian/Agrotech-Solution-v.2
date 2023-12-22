@extends("layout.app")

@section('title','Dashboard')

@section("content")
<h5 class="pb-1 mb-4">Pembibitan</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/kecambah.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Pembibitan 🍀</h5>
                    <h5 class="card-title"></h5>
                    <p class="card-text" style="text-align: justify;">
                      Serupa dengan tanah, biji kacang hijau juga harus digunakan secara hati-hati. Jika tanah belum pernah digunakan untuk menanam kacang hijau sebelumnya, maka benih kacang hijau perlu dilakukan inokulasi terlebih dahulu, tujuannya adalah agar benih dapat beradaptasi dengan tanah. Inokulasi bisa dilakukan dengan menggunakan bibit bakteri rhizobium. Hal tersebut dilakukan dengan cara membasahi bibit kacang hijau yang telah dipilih dengan air lalu dikeringkan dengan cara diangin-anginkan selama ± 4 jam hingga kecambah pada benih muncul.
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
