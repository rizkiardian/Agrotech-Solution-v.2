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
            action="tambah-tanaman-proses"
            enctype="multipart/form-data"
        >
            @csrf

            <div>
                <label for="nama_tanaman">nama_tanaman</label>
                <input
                    id="nama_tanaman"
                    type="text"
                    name="nama_tanaman"
                    value="{{ old("nama_tanaman") }}"
                    autofocus
                />
                @error("nama_tanaman")
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="gambar">Gambar</label>
                <input
                    id="gambar"
                    type="file"
                    name="gambar"
                    value="{{ old("gambar") }}"
                    autofocus
                />
                @error("gambar")
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="urea">urea</label>
                <input
                    id="urea"
                    type="number"
                    step="0.01"
                    min="0"
                    name="urea"
                    value="{{ old("urea") }}"
                    autofocus
                />
                @error("urea")
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="ZA">ZA</label>
                <input
                    id="ZA"
                    type="number"
                    step="0.01"
                    min="0"
                    name="ZA"
                    value="{{ old("ZA") }}"
                    autofocus
                />
                @error("ZA")
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="TSP">TSP</label>
                <input
                    id="TSP"
                    type="number"
                    step="0.01"
                    min="0"
                    name="TSP"
                    value="{{ old("TSP") }}"
                    autofocus
                />
                @error("TSP")
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="SP36">SP36</label>
                <input
                    id="SP36"
                    type="number"
                    step="0.01"
                    min="0"
                    name="SP36"
                    value="{{ old("SP36") }}"
                    autofocus
                />
                @error("SP36")
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="KCL">KCL</label>
                <input
                    id="KCL"
                    type="number"
                    step="0.01"
                    min="0"
                    name="KCL"
                    value="{{ old("KCL") }}"
                    autofocus
                />
                @error("KCL")
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="MOP">MOP</label>
                <input
                    id="MOP"
                    type="number"
                    step="0.01"
                    min="0"
                    name="MOP"
                    value="{{ old("MOP") }}"
                    autofocus
                />
                @error("MOP")
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div>
                <button type="submit">Tambah</button>
            </div>
        </form>
    </body>
</html>
