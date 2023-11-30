@extends('admin.layouts.app')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Category</h1>
  </div>
  <div class="col-lg-8">

      <form method="POST" action="{{ route('budaya.store') }}" class="mb-5"  enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="category_name" class="form-label">Budaya Name</label>
          <input type="text" class="form-control" id="category_name" name="category_name" autofocus value="{{ old('category_name') }}">
          @error('category_name')
                <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Image</label>
            <img class="img-preview img-fluid mb-3">
            <input class="form-control" type="file" name="gambar" id="gambar" onchange="previewImage()">
            @error('gambar')
            <p class="text-danger">{{ $message }}</p>
          @enderror
          </div>
        <button type="submit" class="btn btn-primary">Create Budaya</button>
      </form>
  </div>
  <script>
    function previewImage(){
        const image =  document.querySelector('#gambar');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';
        imgPreview.style.width = '50%';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
        }
    }
  </script>
@endsection
