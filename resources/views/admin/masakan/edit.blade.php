@extends('admin.layouts.app')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Ubah Data Masakan Khas</h1>
  </div>
  <div class="col-lg-8">

      <form method="POST" action="{{ route('masakan.update',$data->id) }}" class="mb-5" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="masakan_name" class="form-label">Nama Masakan Khas</label>
          <input type="text" class="form-control" id="masakan_name" name="masakan_name" autofocus value="{{ old('masakan_name',$data->masakan_name) }}">
          @error('masakan_name')
                <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
          <input type="hidden" name="budaya_id" value={{ $categories }}>
        <div class="mb-3">
            <label for="province_id" class="form-label">Provinsi</label>
            <select class="form-select" name="province_id">
              @foreach ($province as $item)
              @if (old('province_id',$data->province_id) == $item->id)
              <option value="{{ $item->id }}" selected>{{ $item->province_name }}</option>
              @else
              <option value="{{ $item->id }}" >{{ $item->province_name }}</option>
              @endif
              @endforeach
            </select>
          </div>
        <div class="mb-3">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          @error('deskripsi')
             <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi',$data->deskripsi) }}">
          <trix-editor input="deskripsi"></trix-editor>
        </div>
        <div class="mb-3">
          <label for="sejarah" class="form-label">Sejarah</label>
          @error('sejarah')
             <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="sejarah" type="hidden" name="sejarah" value="{{ old('sejarah',$data->sejarah) }}">
          <trix-editor input="sejarah"></trix-editor>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <img class="img-preview img-fluid mb-3" src="{{ Storage::url($data->gambar) }}" style="width: 50%; display:block;">
            <input class="form-control" type="file" name="gambar" value="{{ old('gambar',$data->gambar) }}" id="gambar" onchange="previewImage()">
            @error('gambar')
            <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
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
