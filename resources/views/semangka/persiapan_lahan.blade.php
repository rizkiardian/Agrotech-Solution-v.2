@extends('layout.app')

@section('title','Dashboard')
    
@section('content')
<h5 class="pb-1 mb-4">Pemilihan Tanaman</h5>

            <div class="row mb-5">

              <div class="col-lg-8 mb-4">

                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/lahan_semangka.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
                    <h5 class="card-title">Pemilihan Benih</h5>
                    <p class="card-text" style="text-align: justify;">
                      a.Lahan dibersihkan dari sisa tanaman, selanjutnya dilakukan pembalikan tanah, dan dapat segera
                      dilakukan pembuatan bedengan setengah jadi.
                      <br><br>b. Pembuatan bedengan dilakukan dengan cara tanah dibalik dan digemburkan sampai sedalam ±
                      30 cm, kemudian dibuat bedengan dengan lebar 100 cm, tinggi bedengan 30 cm, jarak antar bedengan
                      terdekat 50 cm, jarak antar dua bedengan selanjutnya 250-300 cm untuk system kupu-kupu tarung dan
                      Lebar bedengan 60 cm, dengan lebar lari sulur 180-200cm untuk system searah.
                      <br><br>c. Pemberian pupuk dasar. Keringkan lahan 4-7 hari, tambahkan pupuk dasar (Bahan
                      Organik/Pupuk kan-dang/kompos, NPK Buku Pedoman Budidaya Semangka dan Kapur/do-lomit) sesuai
                      dengan tingkat kesuburan tanah, kemudian dicampur dan diaduk rata di dalam bedengan.
                      <br><br>d. Pemasangan mulsa plastik hitam perak (PHP) dipasang pada bedeng-an dengan menggunakan
                      pasak penjepit dari bambu yang ditan-capkan ke bedengan di bagian pinggir mulsa agar tidak mudah
                      lepas ditiup angin. Pemasangan mulsa PHP sebaiknya pada siang hari, karena pada siang hari plastik
                      lentur dan mudah pemasangannya.
                      <br><br>e. Pembuatan lubang tanam. Lubang tanam dibuat jarak 60 cm dengan cara mulsa PHP dilubangi
                      menggunakan kaleng susu dengan diameter ± 10 cm yang diisi bara nyala. Setelah itu ditugal sedalam
                      ± 10 cm, dengan alat tugal berdiameter ± 5 cm.

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