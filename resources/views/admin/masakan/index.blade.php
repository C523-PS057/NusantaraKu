@extends('admin.layouts.app')
@section('container')
@if ($data->count() > 0)
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Masakan Khas</h1>
  </div>
  <form action="{{ route('masakan.index') }}" method="GET">
  <div class="input-group mb-3">
    <div class="col-md-5">
        <input name="search" type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="basic-addon2" value="{{ request('search') }}">
    </div>
    <button class="btn btn-outline-primary" type="submit" id="button-addon2">
        <i class="ri-search-line"></i>
    </button>
  </div>
  </form>
    <a href="{{ route('masakan.create') }}" class="btn btn-primary mb-3">Create new Masakan</a>
    <div class="card-dis">
    @foreach ($data as $item)
        <div class="card">
            <img class="card-img-top" src="{{ Storage::url($item->gambar) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $item->province->province_name }}</h5>
              <h5 class="card-title">{{ $item->masakan_name }}</h5>
              <a href="{{ route('masakan.show',$item->id) }}" class="btn btn-primary">Detail</a>
              <a href="{{ route('masakan.edit',$item->id) }}" class="btn btn-warning my-2">Edit</a>
              <form action="{{ route('masakan.destroy',$item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" style="width: 100%" onclick="return confirm('Yakin Di Hapus?')">Delete</button>
            </form>
            </div>
          </div>
          @endforeach
        </div>
  <div class="d-flex justify-content-center">
    {!! $data->links() !!}
</div>
  @else
    <div class="d-flex justify-content-center my-2">
        <div class=""><h2>No Masakan Found</h2></div>
    </div>
    <div class="d-flex justify-content-center my-1">
        <div class=""><a href="{{ route('masakan.create') }}" class="btn btn-primary">Create New Masakan</a></div>
    </div>
@endif
@endsection
