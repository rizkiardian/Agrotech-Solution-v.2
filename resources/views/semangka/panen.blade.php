@extends("layout.app")

@section('title','Dashboard')

@section("content")

    <h5 class="pb-1 mb-4">Panen</h5>

    <div class="row mb-5">
      
      <div class="col-lg-8 mb-4">
        
        <div class="card h-100">
          <img class="card-img-top" src="../assets/img/elements/panen_semangka.jpg" alt="Card image cap" />
          <div class="card-body">
            <h5 class="card-title text-primary">Minggu ke 2 🍀</h5>
            <h5 class="card-title">Panen</h5>
            <p class="card-text" style="text-align: justify;">
              Terdapat beberapa faktor yang mempengaruhi umur panen buah semangka. Merujuk pada buku “Petunjuk Teknis Budidaya Semangka”, umur panen buah semangka bervariasi antara 65 hingga 85 hari setelah tanam, tergantung faktor genetika, klimat, serta tindakan budidaya. Penanaman semangka pada ketinggian 700-900 meter di atas permukaan laut mempunyai umur panen yang lebih lama, yaitu sekitar 90 hingga 100 hari setelah tanam. Ciri-ciri buah semangka yang siap panen adalah: Warna dan tekstur kulit buah terlihat bersih, jelas, dan mengkilat. Sulur pada pangkal buah kecil dan telah berubah warna menjadi cokelat tua dan mengering. Suara buah bila diketuk dengan jari akan bersuara agak berat. Tangkai buah mengecil hingga terlihat tidak sesuai dengan ukuran buah. Bagian buah yang terletak di atas landasan telah berubah warna dari putih menjadi kuning tua. Saat panen yang tepat adalah di pagi hari, karena proses penimbunan zat makanan terjadi pada malam hari. Buah dipanen dengan pemotongan pada bagian tangkai menggunakan pisau dengan jarak tujuh sentimeter dari buah. Panen buah semangka dilakukan bertahap dengan mengutamakan tanaman yang sudah siap panen terlebih dahulu. Buah yang dipanen dikumpulkan dalam keranjang dengan hati-hati untuk mencegah cacat buah secara fisik.
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
