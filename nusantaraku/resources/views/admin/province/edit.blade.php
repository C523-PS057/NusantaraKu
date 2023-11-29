@extends('admin.layouts.app')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Province</h1>
  </div>
  <div class="col-lg-8">

      <form method="POST" action="{{ route('province.update',$province->id) }}" class="mb-5">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="province_name" class="form-label">Province Name</label>
          <input type="text" class="form-control" id="province_name" name="province_name" autofocus value="{{ old('province_name',$province->province_name) }}">
          @error('province_name')
                <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="video_link" class="form-label">Video Link</label>
          <input type="text" class="form-control @error('video_link') is-invalid @enderror" id="video_link" name="video_link" value="{{ old('video_link',$province->video_link) }}">
          @error('video_link')
                <p class="text-danger">{{ $message }}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="deskripsi" class="form-label">Description</label>
          @error('deskripsi')
             <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi',$province->deskripsi) }}">
          <trix-editor input="deskripsi"></trix-editor>
        </div>
        <div class="mb-3">
          <label for="sejarah" class="form-label">Sejarah</label>
          @error('sejarah')
             <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="sejarah" type="hidden" name="sejarah" value="{{ old('sejarah',$province->sejarah) }}">
          <trix-editor input="sejarah"></trix-editor>
        </div>

        <button type="submit" class="btn btn-warning">Update Province</button>
      </form>
  </div>
@endsection
