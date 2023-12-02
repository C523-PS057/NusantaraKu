@extends('admin.layouts.app')
@section('container')
{{-- @if ($category->count() > 0) --}}
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Budaya</h1>
  </div>
  <form action="{{ route('budaya.index') }}" method="GET">
  <div class="input-group mb-3">
    <div class="col-md-5">
        <input name="search" type="text" class="form-control" placeholder="search" aria-label="search" aria-describedby="basic-addon2" value="{{ request('search') }}">
    </div>
    <button class="btn btn-outline-primary" type="submit" id="button-addon2">
        <i class="ri-search-line"></i>
    </button>
  </div>
  </form>
    {{-- <a href="{{ route('budaya.create') }}" class="btn btn-primary mb-3">Create new Budaya</a> --}}
    <div class="card-dis">
    @foreach ($category as $item)
        <div class="card">
            <img class="card-img-top" src="{{ Storage::url($item->gambar) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $item->category_name }}</h5>
              <a href="{{ route('budaya.show',$item->id) }}" class="btn btn-primary">Detail</a>
              <a href="{{ route('budaya.edit',$item->id) }}" class="btn btn-warning my-2">Edit</a>
              {{-- <form action="{{ route('budaya.destroy',$item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" style="width: 100%" onclick="return confirm('Yakin Di Hapus?')">Delete</button>
            </form> --}}
            </div>
          </div>
          @endforeach
        </div>
  <div class="d-flex justify-content-center">
    {!! $category->links() !!}
</div>
  {{-- @else
    <div class="d-flex justify-content-center my-2">
        <div class=""><h2>No Budaya Found</h2></div>
    </div>
    <div class="d-flex justify-content-center my-1">
        <div class=""><a href="{{ route('budaya.create') }}" class="btn btn-primary">Create new Budaya</a></div>
    </div>
@endif --}}
@endsection
