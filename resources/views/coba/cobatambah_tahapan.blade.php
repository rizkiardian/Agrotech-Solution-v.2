<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
  </head>
  <body>
    <form method="POST" action="tambah-tahapan-proses">
      @csrf

      <div>
        <label for="tahapan">tahapan</label>
        <br />

        @foreach ($tahapan_budidaya as $row)
          <input
            type="checkbox"
            id="{{ $row->tahapan_budidaya }}"
            name="tahapan[]"
            value="{{ $row->id_budidaya }}"
          />
          <label for="{{ $row->tahapan_budidaya }}">
            {{ $row->tahapan_budidaya }}
          </label>
          <br />
        @endforeach

        @error("tahapan")
          <span>{{ $message }}</span>
        @enderror
      </div>

      <div>
        <button type="submit">Tambah</button>
      </div>
    </form>
  </body>
</html>
