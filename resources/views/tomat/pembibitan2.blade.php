@extends("layout.app")

@section('title','Dashboard')

@section("content")
<h5 class="pb-1 mb-4">Penyiapan benih dan pembibitan</h5>

            <div class="row mb-5">
              
              <div class="col-lg-8 mb-4">
                
                <div class="card h-100">
                  <img class="card-img-top" src="../assets/img/elements/bibit_tomat.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
                    <h5 class="card-title">Pembibitan</h5>
                    <p class="card-text" style="text-align: justify;">
                      Langkah-langkah pembibitan
                  1.	Buat dahulu bumbunan daun pisang (pot daun pisang) dengan ukuran 6 – 7 cm dan diameter sekitar 4 – 5 cm
                  2.	Isi pot daun pisang dengan media tanah dan pupuk kendang yang sudah dmasak dengan perbandingan 1:1
                  3.	Untuk mencegah serangan hama tanah seperti semut, cacing, dll, diatas tana diberi Furadan atau Curater dengan dosis 10 kg/ha atau 0,3 gram per pot.
                  4.	Setelah tempat pembibitan siap, rendam benih tomat dengan air hangat minimal 6 jam
                  5.	Setelah selesai direndam langsung ditanam pada pot daun pisang yang telah disiapkan
                  6.	Jika sudah letakkan pot daun pisang di tempat yang teduh, untuk memudahkan buat saja naungan yang beratap daun kelapa atau alang – alang, untuk menjaga kelembabannya.
                  7.	Siram pagi dan sore hari untuk menjaga tanah tetap lembab.
                  8.	Sekitar 5 – 7 hari benih tomat akan muncul kecambah
                  9.	Bibit dapat dipindah ke lapangan setelah berumur 25 – 30 hari setelah semai.

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
