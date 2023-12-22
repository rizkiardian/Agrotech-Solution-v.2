@extends("layout.app")

@section('title','Dashboard')

@section("content")
<h5 class="pb-1 mb-4">Pemeliharaan</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/penyiraman_tomat.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
                    <h5 class="card-title">Penyulaman</h5>
                    <p class="card-text" style="text-align: justify;">
                      a.	Penyulaman dilakukan pada tanaman yang tidak sehat pertumbuhannya dengan bibit baru yang kira-kira umurnya sama. Penyulaman dilakukan pada satu mimnggu setelah tanam.
<br>b.	Bibit yang rusak dicabut Bersama dengan media tumbuhnya. Lubang tanam tersebut diisi dengan media baru yang sebelumnya telah diberi kapur pertanian.

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
