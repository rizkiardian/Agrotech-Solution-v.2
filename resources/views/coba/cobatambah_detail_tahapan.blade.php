<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
  </head>
  <body>
    <form
      method="POST"
      action="tambah-detail_tahapan-proses"
      enctype="multipart/form-data"
    >
      @csrf

      <div>
        <div class="row" id="formTahapanKegiatan">
          <h4 class="fw-bold py-3 mb-4">
            <span class="text-muted fw-light"></span>
            Form Kegiatan {{ $judul_kegiatan }}
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
                    <button
                      type="button"
                      class="btn btn-primary float-end"
                      id="tambah"
                    >
                      Tambah
                    </button>
                  </div>
                </div>

                <div class="mb-3" id="formContainer">
                  <label class="form-label" for="basic-default-fullname">
                    Waktu
                  </label>
                  <input
                    type="text"
                    class="form-control"
                    name="waktu[]"
                    placeholder="Tambah waktu"
                    value="{{ old("waktu.0") }}"
                    autofocus
                  />
                  @error("waktu.0")
                    <span class="text-danger">{{ $message }}</span>
                  @enderror

                  <label class="form-label" for="basic-default-fullname">
                    Judul
                  </label>
                  <input
                    type="text"
                    class="form-control"
                    name="judul[]"
                    placeholder="Tambah Judul"
                    value="{{ old("judul.0") }}"
                    autofocus
                  />
                  @error("judul.0")
                    <span class="text-danger">{{ $message }}</span>
                  @enderror

                  <label class="form-label" for="formFile">
                    Gambar Tanaman
                  </label>
                  <input
                    class="form-control"
                    type="file"
                    name="gambar[]"
                    autofocus
                  />
                  @error("gambar.0")
                    <span class="text-danger">{{ $message }}</span>
                  @enderror

                  <label class="form-label" for="basic-default-fullname">
                    Deskripsi
                  </label>
                  <textarea
                    class="form-control"
                    name="deskripsi[]"
                    rows="3"
                    autofocus
                  >
{{ old("deskripsi.0") }}</textarea
                  >
                  @error("deskripsi.0")
                    <span class="text-danger">{{ $message }}</span>
                  @enderror

                  <hr style="height: 3px" />

                  {{-- jika terjadi validasi yang error --}}
                  @if ($errors->any())
                    @for ($i=1; $i < session('jumlah_inputan'); $i++)
                      <label class="form-label" for="basic-default-fullname">
                        Waktu
                      </label>
                      <input
                        type="text"
                        class="form-control"
                        name="waktu[]"
                        placeholder="Tambah waktu"
                        value="{{ old("waktu." . $i) }}"
                        autofocus
                      />
                      @error("waktu." . $i)
                        <span class="text-danger">{{ $message }}</span>
                      @enderror

                      <label class="form-label" for="basic-default-fullname">
                        Judul
                      </label>
                      <input
                        type="text"
                        class="form-control"
                        name="judul[]"
                        placeholder="Tambah Judul"
                        value="{{ old("judul." . $i) }}"
                        autofocus
                      />
                      @error("judul." . $i)
                        <span class="text-danger">{{ $message }}</span>
                      @enderror

                      <label class="form-label" for="formFile">
                        Gambar Tanaman
                      </label>
                      <input class="form-control" type="file" name="gambar[]" />
                      @error("gambar." . $i)
                        <span class="text-danger">{{ $message }}</span>
                      @enderror

                      <label class="form-label" for="basic-default-fullname">
                        Deskripsi
                      </label>
                      <textarea
                        class="form-control"
                        name="deskripsi[]"
                        rows="3"
                      >
{{ old("deskripsi." . $i) }}</textarea
                      >
                      @error("deskripsi." . $i)
                        <span class="text-danger">{{ $message }}</span>
                      @enderror

                      <div class="d-flex justify-content-center">
                        <button
                          type="button"
                          class="btn btn-danger mt-2"
                          onclick="hapusForm(this)"
                        >
                          Hapus
                        </button>
                      </div>
                      <hr style="height: 3px" />
                    @endfor
                  @endif
                </div>

                <div class="d-flex justify-content-between mt-3">
                  <button class="btn btn-outline-primary" id="Kembali">
                    Kembali
                  </button>
                  <button type="submit" class="btn btn-primary" id="lanjut">
                    Selanjutnya
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>

    <script>
      // Fungsi untuk menambahkan form baru
      function tambahForm() {
        var formContainer = document.getElementById("formContainer");

        var div = document.createElement("div");
        div.classList.add("form-item");

        div.innerHTML = `
                <label class="form-label" for="basic-default-fullname">Waktu</label>
                <input type="text" class="form-control" name="waktu[]" placeholder="Tambah waktu" />

                <label class="form-label" for="basic-default-fullname">Judul</label>
                <input type="text" class="form-control" name="judul[]" placeholder="Tambah Judul" />

                <label class="form-label" for="formFile">Gambar Tanaman</label>
                <input class="form-control" type="file" name="gambar[]" />

                <label class="form-label" for="basic-default-fullname">Deskripsi</label>
                <textarea class="form-control" name="deskripsi[]" rows="3"></textarea>

                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-danger mt-2" onclick="hapusForm(this)">Hapus</button>
                </div>
                <hr style="height: 3px;">
            `;

        formContainer.appendChild(div);
      }

      // Fungsi untuk menghapus form
      function hapusForm(button) {
        var formItem = button.parentNode.parentNode;
        formItem.remove();
      }

      // Menambahkan event listener pada tombol "Tambah Form"
      var tambahButton = document.getElementById("tambah");
      tambahButton.addEventListener("click", tambahForm);
    </script>
  </body>
</html>
