@extends('layout.app')

@section('title', 'Deteksi')

@section('content')
  <div class="card">
    <h5 class="mx-auto mt-3 pb-1"><b>Masukan gambar untuk mendapatkan hasil analisa hama dan tips penanganannya</b></h5>
    <div class="card col-lg-4 h-100 mx-auto">
      <img class="card-img-top" src="../assets/img/elements/hama.jpg" alt="Card image cap" />
    </div>
    <div class="card-body text-center">
      <button class="file-upload-btn btn btn-outline-primary" type="button"
        onclick="$('.file-upload-input').trigger( 'click' )">Tambahkan Gambar</button>
    </div>

    <div class="image-upload-wrap m-3">
      <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" />
      <div class="drag-text">
        <h3>Drag and drop a file or select add Image</h3>
      </div>
    </div>
    <div class="file-upload-content">
      <img class="file-upload-image" src="#" alt="your image" />
      <div class="image-title-wrap">
        <button type="button" onclick="removeUpload()" class="btn btn-danger remove-image">Remove</button>
        <button type="button" onclick="removeUpload()" class="btn btn-success image-title">Uploaded Image</button>
      </div>
    </div>
  </div>

  <script>
    function readUrl(input) {

      if (input.files && input.files[0]) {
        let reader = new FileReader();
        reader.onload = (e) => {
          let imgData = e.target.result;
          let imgName = input.files[0].name;
          input.setAttribute("data-title", imgName);
          console.log(e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
      }

    }

    function readURL(input) {
      if (input.files && input.files[0]) {

        var reader = new FileReader();

        reader.onload = function(e) {
          $('.image-upload-wrap').hide();

          $('.file-upload-image').attr('src', e.target.result);
          $('.file-upload-content').show();

          $('.image-title').html(input.files[0].name);
        };

        reader.readAsDataURL(input.files[0]);

      } else {
        removeUpload();
      }
    }

    function removeUpload() {
      $('.file-upload-input').replaceWith($('.file-upload-input').clone());
      $('.file-upload-content').hide();
      $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function() {
      $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
      $('.image-upload-wrap').removeClass('image-dropping');
    });
  </script>
@endsection
