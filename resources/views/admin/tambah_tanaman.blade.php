<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
  data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>admin</title>

  <meta name="description" content="" />
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="../assets/css/demo.css" />

  <!-- Page CSS -->

  <!-- Helpers -->
  <script src="../assets/vendor/js/helpers.js"></script>

  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="../assets/js/config.js"></script>
</head>

<body>
  <!-- Layout wrapper -->
  <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
      <!-- Menu -->
      <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo">
          <a href="index.html" class="app-brand-link">
            <span class="app-brand-logo demo">
              <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <defs>
                  <path
                    d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                    id="path-1"></path>
                  <path
                    d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                    id="path-3"></path>
                  <path
                    d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                    id="path-4"></path>
                  <path
                    d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                    id="path-5"></path>
                </defs>
                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                    <g id="Icon" transform="translate(27.000000, 15.000000)">
                      <g id="Mask" transform="translate(0.000000, 8.000000)">
                        <mask id="mask-2" fill="white">
                          <use xlink:href="#path-1"></use>
                        </mask>
                        <use fill="#696cff" xlink:href="#path-1"></use>
                        <g id="Path-3" mask="url(#mask-2)">
                          <use fill="#696cff" xlink:href="#path-3"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                        </g>
                        <g id="Path-4" mask="url(#mask-2)">
                          <use fill="#696cff" xlink:href="#path-4"></use>
                          <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                        </g>
                      </g>
                      <g id="Triangle"
                        transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                        <use fill="#696cff" xlink:href="#path-5"></use>
                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                      </g>
                    </g>
                  </g>
                </g>
              </svg>
            </span>
            <span class="app-brand-text demo menu-text fw-bolder ms-2">
              Agro Tech
            </span>
          </a>

          <a href="Pilih_Tanaman.html" class="layout-menu-toggle menu-link text-large d-block d-xl-none ms-auto">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item">
            <a href="dasboard.html" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Tambah Data</div>
            </a>
          </li>
        </ul>

        <!-- Layouts -->
      </aside>
      <!-- / Menu -->

      <!-- Layout container -->
      <div class="layout-page">
        <!-- Navbar -->
        <nav
          class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
          id="layout-navbar">
          <div class="layout-menu-toggle navbar-nav align-items-xl-center me-xl-0 d-xl-none me-3">
            <a class="nav-item nav-link me-xl-4 px-0" href="javascript:void(0)">
              <i class="bx bx-menu bx-sm"></i>
            </a>
          </div>

          <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
            <!-- Search -->
            <div class="navbar-nav align-items-center">
              <div class="nav-item d-flex align-items-center">
                <i class="bx bx-search fs-4 lh-0"></i>
                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..."
                  aria-label="Search..." />
              </div>
            </div>
            <!-- /Search -->

            <ul class="navbar-nav align-items-center ms-auto flex-row">
              <!-- User -->
              <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                  <div class="avatar avatar-online">
                    <img src="../assets/img/avatars/1.png" alt class="w-px-40 rounded-circle h-auto" />
                  </div>
                </a>
              </li>
              <ul class="dropdown-menu dropdown-menu-end">
                <li>
                  <a class="dropdown-item" href="#">
                    <div class="d-flex">
                      <div class="me-3 flex-shrink-0">
                        <div class="avatar avatar-online">
                          <img src="../assets/img/avatars/1.png" alt class="w-px-40 rounded-circle h-auto" />
                        </div>
                      </div>
                      <div class="flex-grow-1">
                        <span class="fw-semibold d-block">John Doe</span>
                        <small class="text-muted">Admin</small>
                      </div>
                    </div>
                  </a>
                </li>
                <li>
                  <div class="dropdown-divider"></div>
                </li>
                <li>
                  <a class="dropdown-item" href="#">
                    <i class="bx bx-user me-2"></i>
                    <span class="align-middle">My Profile</span>
                  </a>
                </li>
                <a class="dropdown-item" href="auth-login-basic.html">
                  <i class="bx bx-power-off me-2"></i>
                  <span class="align-middle">Log Out</span>
                </a>
              </ul>
            </ul>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Content wrapper -->
        <div class="content-wrapper">
          <!-- Content -->
          <div class="container-xxl flex-grow-1 container-p-y">
            <!-- Basic Layout -->
            <form id="formTanaman" method="POST" action="tambah-tanaman-proses" enctype="multipart/form-data">
              @csrf
              <!-- Isi formulir halaman 1 -->
              <div id="page1">
                <div class="row" id="formTambahTanaman">
                  <h4 class="fw-bold mb-4 py-3">
                    <span class="text-muted fw-light"></span>
                    Form Tambah Tanaman
                  </h4>
                  <div class="col-xl">
                    <div class="card mb-4">
                      <div class="card-body">
                        <div class="mb-3">
                          <label class="form-label" for="nama_tanaman">
                            Nama Tanaman
                          </label>
                          <input type="text" class="form-control" id="nama_tanaman" placeholder="Tambah Tanaman"
                            name="nama_tanaman" value="" autofocus
                            onblur="tanamanValidator.validasiKosong('nama_tanaman')" />
                          <div>
                            <span id="nama_tanaman_error" class="text-danger"></span>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label for="gambar_tanaman" class="form-label">
                            Gambar Tanaman
                          </label>
                          <input class="form-control" type="file" id="gambar_tanaman" name="gambar_tanaman"
                            value="" autofocus onblur="tanamanValidator.validasiKosong('gambar_tanaman')" />
                          <div>
                            <span id="gambar_tanaman_error" class="text-danger"></span>
                          </div>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">
                            Kandungan Nitrogen/Hektar
                          </label>
                          <div class="row">
                            <div class="col-md-3">
                              <small class="text-light fw-semibold">Urea</small>
                              <input type="number" class="form-control" id="urea" placeholder="Masukan Nilai"
                                step="0.01" min="0" name="urea" value="" autofocus
                                onblur="tanamanValidator.validasiKosong('urea')" />
                              <div>
                                <span id="urea_error" class="text-danger"></span>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <small class="text-light fw-semibold">ZA</small>
                              <input type="number" class="form-control" id="za" placeholder="Masukan Nilai"
                                step="0.01" min="0" name="ZA" value="" autofocus
                                onblur="tanamanValidator.validasiKosong('za')" />
                              <div>
                                <span id="za_error" class="text-danger"></span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">
                            Kandungan FOSFOR/Hektar
                          </label>
                          <div class="row">
                            <div class="col-md-3">
                              <small class="text-light fw-semibold">TSP</small>
                              <input type="number" class="form-control" id="tsp" placeholder="Masukan Nilai"
                                step="0.01" min="0" name="TSP" value="" autofocus
                                onblur="tanamanValidator.validasiKosong('tsp')" />
                              <div>
                                <span id="tsp_error" class="text-danger"></span>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <small class="text-light fw-semibold">SP36</small>
                              <input type="number" class="form-control" id="sp36" placeholder="Masukan Nilai"
                                step="0.01" min="0" name="SP36" value="" autofocus
                                onblur="tanamanValidator.validasiKosong('sp36')" />
                              <div>
                                <span id="sp36_error" class="text-danger"></span>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">
                            Kandungan KALIUM/Hektar
                          </label>
                          <div class="row">
                            <div class="col-md-3">
                              <small class="text-light fw-semibold">KCL</small>
                              <input type="number" class="form-control" id="kcl" placeholder="Masukan Nilai"
                                step="0.01" min="0" name="KCL" value="" autofocus
                                onblur="tanamanValidator.validasiKosong('kcl')" />
                              <div>
                                <span id="kcl_error" class="text-danger"></span>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <small class="text-light fw-semibold">MOP</small>
                              <input type="number" class="form-control" id="mop" placeholder="Masukan Nilai"
                                step="0.01" min="0" name="MOP" value="" autofocus
                                onblur="tanamanValidator.validasiKosong('mop')" />
                              <div>
                                <span id="mop_error" class="text-danger"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="position-relative" style="height: 50px">
                          <button type="button" onclick="nextPage(2)"
                            class="btn btn-primary position-absolute end-0 top-0 mt-3">Next</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Isi formulir halaman 2 -->
              <div id="page2">
                <div class="row" id="formTahapanBudidaya">
                  <h4 class="fw-bold mb-4 py-3">
                    <span class="text-muted fw-light"></span>
                    Form Tahapan Budidaya
                  </h4>
                  <div class="col-xl">
                    <div class="card mb-4">
                      <div class="card-body">
                        <div class="mb-3">
                          <label for="formFile" class="form-label">
                            Tambah Tahapan
                          </label>
                          <!-- Checkboxes and Radios -->
                          <div class="row">
                            <div class="col-md-4">
                              @foreach ($tahapan_budidaya as $row)
                                <div class="form-check mt-3">
                                  <!-- Contoh checkbox dengan pemanggilan fungsi toggleTahapanDetails -->
                                  <input class="form-check-input" type="checkbox" id="{{ $row->tahapan_budidaya }}"
                                    name="budidaya[]" value="{{ $row->id_budidaya }}" />
                                  <label class="form-check-label text-capitalize" for="{{ $row->tahapan_budidaya }}">
                                    {{ $row->tahapan_budidaya }}
                                  </label>
                                </div>
                              @endforeach
                              <div>
                                <span id="budidaya[]_error" class="text-danger"></span>
                              </div>
                            </div>

                            <div class="d-flex justify-content-between mt-3">
                              <button type="button" onclick="previousPage(1)"
                                class="btn btn-outline-primary">Previous</button>
                              <button type="button" onclick="nextPage(3)" class="btn btn-primary">Next</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Isi formulir halaman 3 -->
              <div id="page3">
                <!-- Template formulir halaman 3 -->
                <div id="templateForm">
                  <div class="row" id="formTahapanKegiatan" style="display: none">
                    <h4 class="fw-bold text-capitalize mb-4 py-3">
                      Form Kegiatan
                    </h4>
                    <div class="col-xl">
                      <div class="card mb-4">
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <label for="formFile" class="form-label">
                                Tambah Tahapan
                              </label>
                            </div>
                            <div class="col">
                              <button type="button" class="btn btn-primary float-end" onclick="tambahForm(this)">
                                Tambah
                              </button>
                            </div>
                          </div>

                          <div class="mb-3" id="formContainer">
                            <div class="formItem0">
                              <label class="form-label" for="validasi_waktu_tahapan">
                                Waktu
                              </label>
                              <input type="text" class="form-control" name="waktu_tahapan[]"
                                placeholder="Tambah waktu" autofocus id="validasi_waktu_tahapan"
                                onblur="tahapanValidator.validasiKosongTahapan(this)" />
                              <div>
                                <span id="validasi_waktu_tahapan_error" class="text-danger"></span>
                              </div>

                              <label class="form-label" for="validasi_judul_tahapan">
                                Judul
                              </label>
                              <input type="text" class="form-control" name="judul_tahapan[]"
                                placeholder="Tambah Judul" autofocus id="validasi_judul_tahapan"
                                onblur="tahapanValidator.validasiKosongTahapan(this)" />
                              <div>
                                <span id="validasi_judul_tahapan_error" class="text-danger"></span>
                              </div>

                              <label class="form-label" for="validasi_gambar_tahapan">
                                Gambar Tanaman
                              </label>
                              <input class="form-control" type="file" name="gambar_tahapan[]" autofocus
                                id="validasi_gambar_tahapan" onblur="tahapanValidator.validasiKosongTahapan(this)" />
                              <div>
                                <span id="validasi_gambar_tahapan_error" class="text-danger"></span>
                              </div>

                              <label class="form-label" for="validasi_deskripsi_tahapan">
                                Deskripsi
                              </label>
                              <textarea class="form-control" name="deskripsi_tahapan[]" rows="3" autofocus id="validasi_deskripsi_tahapan"
                                onblur="tahapanValidator.validasiKosongTahapan(this)"></textarea>
                              <div>
                                <span id="validasi_deskripsi_tahapan_error" class="text-danger"></span>
                              </div>

                              <hr style="height: 3px" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="d-flex justify-content-between m-3">
                    <button type="button" onclick="previousPage(2)"
                      class="btn btn-outline-primary">Previous</button>
                    <button type="button" onclick="submitForm()" class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </form>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex justify-content-between flex-md-row flex-column flex-wrap py-2">
                <div class="mb-md-0 mb-2">
                  ©
                  <script>
                    document.write(new Date().getFullYear());
                  </script>
                  , made with ❤️ by
                  <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">
                    TU WIN
                  </a>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
  </div>
  <!-- / Layout wrapper -->

  <!-- Core JS -->

  <script>
    document.getElementById(`page1`).style.display = 'block';
    document.getElementById(`page2`).style.display = 'none';
    document.getElementById(`page3`).style.display = 'none';

    // Data sementara formulir
    let formData = {};

    function nextPage(page) {
      let validasi; // Inisialisasi dulu variabel validasinya

      if (page === 2) { // Jika ingin pindah ke halaman 2
        // Lakukan validasi dulu
        validasi = tanamanValidator.validasiKosong('nama_tanaman') && tanamanValidator.validasiKosong(
            'gambar_tanaman') && tanamanValidator.validasiKosong('urea') && tanamanValidator.validasiKosong('za') &&
          tanamanValidator.validasiKosong('tsp') && tanamanValidator.validasiKosong('sp36') && tanamanValidator
          .validasiKosong('kcl') && tanamanValidator.validasiKosong('mop');

        if (validasi) {
          // Jika validasinya berhasil
          // karena pindah ke halaman 2 maka simpan data yang di halaman 1
          formData.nama_tanaman = document.getElementsByName('nama_tanaman')[0].value;
          formData.gambar_tanaman = document.getElementsByName('gambar_tanaman')[0].value;
          formData.urea = document.getElementsByName('urea')[0].value;
          formData.ZA = document.getElementsByName('ZA')[0].value;
          formData.TSP = document.getElementsByName('TSP')[0].value;
          formData.SP36 = document.getElementsByName('SP36')[0].value;
          formData.KCL = document.getElementsByName('KCL')[0].value;
          formData.MOP = document.getElementsByName('MOP')[0].value;
        }
      } else if (page === 3) { // Jika ingin pindah ke halaman 2
        // Lakukan validasi dulu
        validasi = budidayaValidator.validasiCheckbox('budidaya[]');

        if (validasi) {
          // Jika validasinya berhasil
          // karena pindah ke halaman 3 maka simpan data yang di halaman 2
          const checkboxes = document.getElementsByName('budidaya[]');
          // Simpan nilai checkbox yang dipilih pada halaman kedua
          formData.value_budidaya = Array.from(checkboxes).filter(checkbox => checkbox.checked).map(checkbox => checkbox
            .value);
          // Simpan judul budidayanya juga
          formData.judul_budidaya = Array.from(checkboxes).filter(checkbox => checkbox.checked).map(checkbox => checkbox
            .id);

          // Simpan data di local storage dulu
          // localStorage.setItem('formData', JSON.stringify(formData));
          // // Ambil data dari local storage
          // let storedData = localStorage.getItem('formData');
          // let formData = JSON.parse(storedData);
          console.log(formData);

          // tampilkan formTahapanKegiatan dulu
          document.getElementById('formTahapanKegiatan').style.display = 'block';

          // Mengambil template formulir dari elemen dengan id "templateForm"
          let formContainer = document.getElementById('templateForm'); // untuk menampung nantinya
          let templateForm = document.getElementById('templateForm')
            .innerHTML; // mengambil semua isi htmlnya dalam string
          // buat elemen div dan beri nama idnya
          let tampung = document.createElement("div");
          tampung.setAttribute("id", "isiTemplateForm");

          // hilangkan formTahapanKegiatan dulu
          document.getElementById('formTahapanKegiatan').style.display = 'none';

          // menghitung jumlah tahapan yang dipilih pada formData
          let jumlahTahapan = formData.value_budidaya.length;

          // Menampilkan formulir sebanyak jumlah tahapan yang dipilih
          for (let i = 0; i < jumlahTahapan; i++) {
            // Menambahkan formulir ke tampung tapi ubah dulu string formTahapanKegiatan dan Form Kegiatan
            tampung.innerHTML += templateForm.replace(/formTahapanKegiatan/g,
                `formTahapanKegiatan${formData.value_budidaya[i]}`)
              .replace(/Form Kegiatan/g, `${formData.judul_budidaya[i]}`);
            // console.log(templateForm);
          }

          // tambahkan isi html pada variabel tampung menjadi anaknya formContainer (akhirnya tampil di browser)
          formContainer.appendChild(tampung);
        }
      }

      if (true) {
        // Tampilkan halaman berikutnya
        document.getElementById(`page${page - 1}`).style.display = 'none'; //halaman saat ini di hilangkan
        document.getElementById(`page${page}`).style.display = 'block'; //halaman berikutnya di tampilkan
      }
    }

    function previousPage(page) {
      // Kembali ke halaman sebelumnya
      document.getElementById(`page${page + 1}`).style.display = 'none'; //halaman saat ini di hilangkan
      document.getElementById(`page${page}`).style.display = 'block'; //halaman sebelumnya di tampilkan

      // jika waktu kembali terdapat form dari page3 yang ikut maka dihapus dulu
      if (document.getElementById('isiTemplateForm')) {
        document.getElementById('isiTemplateForm').remove();

        // Jika sebelumnya ada formData.formTahapanKegiatan maka hapus dulu agar tidak bertumpukan
        for (let key in formData) {
          if (key.startsWith('formTahapanKegiatan')) {
            delete formData[key];
          }
        }
      }
    }


    // Fungsi untuk menambahkan form baru
    function tambahForm(elemen) {
      const card_body = elemen.closest('.card-body');

      // Dapatkan semua elemen dengan kelas yang dimulai dengan "formItem"
      let formItems = card_body.querySelectorAll('[class^="formItem"]');

      // Ambil kelas dari elemen terakhir
      let lastFormItemClass = formItems[formItems.length - 1].className;

      // Pisahkan kelas untuk mendapatkan angka terakhir
      let lastNumber = lastFormItemClass.match(/\d+/)[0];
      let nomer_baru = parseInt(lastNumber) + 1;
      console.log(lastNumber);

      let formContainer = card_body.querySelector("#formContainer");
      let div = document.createElement("div");
      div.classList.add(`formItem${nomer_baru}`);

      div.innerHTML = `
          <label class="form-label" for="validasi_waktu_tahapan">
            Waktu
          </label>
          <input type="text" class="form-control" name="waktu_tahapan[]"
            placeholder="Tambah waktu" autofocus id="validasi_waktu_tahapan"
            onblur="tahapanValidator.validasiKosongTahapan(this)" />
          <div>
            <span id="validasi_waktu_tahapan_error" class="text-danger"></span>
          </div>

          <label class="form-label" for="validasi_judul_tahapan">
            Judul
          </label>
          <input type="text" class="form-control" name="judul_tahapan[]"
            placeholder="Tambah Judul" autofocus id="validasi_judul_tahapan"
            onblur="tahapanValidator.validasiKosongTahapan(this)" />
          <div>
            <span id="validasi_judul_tahapan_error" class="text-danger"></span>
          </div>

          <label class="form-label" for="validasi_gambar_tahapan">
            Gambar Tanaman
          </label>
          <input class="form-control" type="file" name="gambar_tahapan[]" autofocus
            id="validasi_gambar_tahapan" onblur="tahapanValidator.validasiKosongTahapan(this)" />
          <div>
            <span id="validasi_gambar_tahapan_error" class="text-danger"></span>
          </div>

          <label class="form-label" for="validasi_deskripsi_tahapan">
            Deskripsi
          </label>
          <textarea class="form-control" name="deskripsi_tahapan[]" rows="3" autofocus id="validasi_deskripsi_tahapan"
            onblur="tahapanValidator.validasiKosongTahapan(this)"></textarea>
          <div>
            <span id="validasi_deskripsi_tahapan_error" class="text-danger"></span>
          </div>

          <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-danger mt-2" onclick="hapusForm(this)">Hapus</button>
          </div>

          <hr style="height: 3px" />
            `;

      formContainer.appendChild(div);
    }

    // Fungsi untuk menghapus form
    function hapusForm(button) {
      // let formItem = button.parentNode.parentNode;
      // atau
      let formItem = button.closest('[class^="formItem"]');
      formItem.remove();
    }

    function submitForm() {
      // Jika sebelumnya ada formData.formTahapanKegiatan maka hapus dulu agar tidak bertumpukan
      for (let key in formData) {
        if (key.startsWith('formTahapanKegiatan')) {
          delete formData[key];
        }
      }

      // Validasi dulu
      let validasi = true;

      // Memilih semua input dengan atribut name yang diakhiri dengan []
      let waktuInputs = document.querySelectorAll("input[name='waktu_tahapan[]']");
      let judulInputs = document.querySelectorAll("input[name='judul_tahapan[]']");
      let gambarInputs = document.querySelectorAll("input[name='gambar_tahapan[]']");
      let deskripsiInputs = document.querySelectorAll("textarea[name='deskripsi_tahapan[]']");

      // Melakukan Validasi dan Penyimpanan Data Sementara dari semua inputan
      waktuInputs.forEach((input, index) => {
        // Lewati validasi untuk input pertama karena tidak dipakai (input template hidden)
        if (index === 0) {
          return;
        }
        // melakukan validasi
        validasi = validasi && tahapanValidator.validasiKosongTahapan(input);
        // melakukan penyimpanan data ke formData
        let formTahapanKegiatan = input.closest('[id^="formTahapanKegiatan"]').id;
        (formData[`${formTahapanKegiatan}`]) ?
        formData[`${formTahapanKegiatan}`]["waktu_tahapan"].push(input.value):
          formData[`${formTahapanKegiatan}`] = { // Tahap awal harus diinisialisasi dulu (beda sendiri si)
            waktu_tahapan: [input.value]
          };
      });

      judulInputs.forEach((input, index) => {
        // Lewati validasi untuk input pertama karena tidak dipakai (input template hidden)
        if (index === 0) {
          return;
        }
        // melakukan validasi
        validasi = validasi && tahapanValidator.validasiKosongTahapan(input);
        // melakukan penyimpanan data ke formData
        let formTahapanKegiatan = input.closest('[id^="formTahapanKegiatan"]').id;
        (formData[`${formTahapanKegiatan}`]["judul_tahapan"]) ?
        formData[`${formTahapanKegiatan}`]["judul_tahapan"].push(input.value):
          formData[`${formTahapanKegiatan}`]["judul_tahapan"] = [input.value];
      });

      gambarInputs.forEach((input, index) => {
        // Lewati validasi untuk input pertama karena tidak dipakai (input template hidden)
        if (index === 0) {
          return;
        }
        // melakukan validasi
        validasi = validasi && tahapanValidator.validasiKosongTahapan(input);
        // melakukan penyimpanan data ke formData
        let formTahapanKegiatan = input.closest('[id^="formTahapanKegiatan"]').id;
        (formData[`${formTahapanKegiatan}`]["gambar_tahapan"]) ?
        formData[`${formTahapanKegiatan}`]["gambar_tahapan"].push(input.value):
          formData[`${formTahapanKegiatan}`]["gambar_tahapan"] = [input.value];
      });

      deskripsiInputs.forEach((input, index) => {
        // Lewati validasi untuk input pertama karena tidak dipakai (input template hidden)
        if (index === 0) {
          return;
        }
        // melakukan validasi
        validasi = validasi && tahapanValidator.validasiKosongTahapan(input);
        // melakukan penyimpanan data ke formData
        let formTahapanKegiatan = input.closest('[id^="formTahapanKegiatan"]').id;
        (formData[`${formTahapanKegiatan}`]["deskripsi_tahapan"]) ?
        formData[`${formTahapanKegiatan}`]["deskripsi_tahapan"].push(input.value):
          formData[`${formTahapanKegiatan}`]["deskripsi_tahapan"] = [input.value];
      });
      console.log(validasi);
      console.log(formData);

      // Kirim formulir atau lakukan tindakan lainnya
      // alert('Formulir berhasil disubmit! Data: ' + JSON.stringify(formData));

      if (validasi) {
        // Ambil CSRF token dari meta tag
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        console.log(csrfToken);
        console.log(JSON.stringify(formData));

        // Kirim data ke server
        fetch('/api/tambahtanamanproses', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'X-CSRF-TOKEN': csrfToken // Gunakan CSRF token di sini
            },
            body: JSON.stringify(formData)
          })
          .then(response => response.json())
          .then(data => {
            console.log('Response dari server:', data);
          })
          .catch(error => {
            console.error('Terjadi kesalahan:', error);
          });

        // // Melakukan submit formulir
        // let formTanaman = document.getElementById('formTanaman');
        // formTanaman.submit();
      }
    }


    // ===== VALIDASI FORMULIR =====

    // function validasiNamaTanaman() {
    //   let elemen_error = document.getElementById('nama_tanaman_error');
    //   let value_elemenInput = document.getElementById('nama_tanaman').value;

    //   // Validasi menggunakan js biasa
    //   if (value_elemenInput === "") {
    //     elemen_error.innerHTML = "Nama tanaman tidak boleh kosong";
    //     return false;
    //   } else {
    //     elemen_error.innerHTML = "";
    //     return true;
    //   }

    //   ===== ATAU =====

    //   // Validasi menggunakan Validator.js
    //   if (validator.isEmpty(value_elemenInput)) {
    //     elemen_error.innerHTML = "Nama tanaman tidak boleh kosong";
    //     return false;
    //   } else {
    //     elemen_error.innerHTML = "";
    //     return true;
    //   }
    // }

    //   ===== ATAU =====

    class validasiInputan {
      validasiKosong(nama_id_input) {
        let nama_id_error = nama_id_input + '_error';
        let elemen_error = document.getElementById(nama_id_error);
        let value_elemenInput = document.getElementById(nama_id_input).value;

        if (validator.isEmpty(value_elemenInput)) {
          elemen_error.innerHTML = "Tidak boleh kosong";
          return false;
        } else {
          elemen_error.innerHTML = "";
          return true;
        }
      }

      validasiCheckbox(name_input) {
        let nama_id_error = name_input + '_error';
        let elemen_error = document.getElementById(nama_id_error);
        let checkboxes = document.getElementsByName(name_input);

        let checked = false;
        checkboxes.forEach(checkbox => {
          if (checkbox.checked) {
            checked = true;
          }
        });

        if (!checked) {
          elemen_error.innerHTML = "Tidak boleh kosong";
          return false;
        } else {
          elemen_error.innerHTML = "";
          return true;
        }
      }

      validasiKosongTahapan(elemen) {
        let parentDiv = elemen.parentElement; // Mendapatkan elemen induk dari input
        let nama_id_error = elemen.id + '_error';
        let elemen_error = parentDiv.querySelector(`#${nama_id_error}`); // Mendapatkan elemen error
        let value_elemenInput = elemen.value;

        if (validator.isEmpty(value_elemenInput)) {
          elemen_error.innerHTML = "Tidak boleh kosong";
          return false;
        } else {
          elemen_error.innerHTML = "";
          return true;
        }
      }
    }

    const tanamanValidator = new validasiInputan();
    const budidayaValidator = new validasiInputan();
    const tahapanValidator = new validasiInputan();
  </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/validator/13.6.0/validator.min.js"></script>

  <!-- build:js assets/vendor/js/core.js -->
  <script src="../assets/vendor/libs/jquery/jquery.js"></script>
  <script src="../assets/vendor/libs/popper/popper.js"></script>
  <script src="../assets/vendor/js/bootstrap.js"></script>
  <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="../assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

  <!-- Main JS -->
  <script src="../assets/js/main.js"></script>

  <!-- Page JS -->
  <script src="../assets/js/dashboards-analytics.js"></script>

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
