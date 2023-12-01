@extends('admin.layouts.app')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Pakaian</h1>
  </div>
  <div class="col-lg-8">

      <form method="POST" action="{{ route('pakaian.store') }}" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="pakaian_name" class="form-label">Pakaian Name</label>
          <input type="text" class="form-control" id="pakaian_name" name="pakaian_name" autofocus value="{{ old('pakaian_name') }}">
          @error('pakaian_name')
                <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
          <input type="hidden" name="budaya_id" value={{ $categories }}>
        <div class="mb-3">
            <label for="province_id" class="form-label">Province</label>
            <select class="form-select" name="province_id">
              @foreach ($province as $item)
              @if (old('province_id') == $item->id)
              <option value="{{ $item->id }}" selected>{{ $item->province_name }}</option>
              @else
              <option value="{{ $item->id }}" >{{ $item->province_name }}</option>
              @endif
              @endforeach
            </select>
          </div>
        <div class="mb-3">
          <label for="deskripsi" class="form-label">Description</label>
          @error('deskripsi')
             <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}">
          <trix-editor input="deskripsi"></trix-editor>
        </div>
        <div class="mb-3">
          <label for="sejarah" class="form-label">History</label>
          @error('sejarah')
             <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="sejarah" type="hidden" name="sejarah" value="{{ old('sejarah') }}">
          <trix-editor input="sejarah"></trix-editor>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Image</label>
            <img class="img-preview img-fluid mb-3">
            <input class="form-control" type="file" name="gambar" id="gambar" value="" onchange="previewImage()">
            @error('gambar')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create Pakaian</button>
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
