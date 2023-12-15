@extends('admin.layouts.app')
@section('container')
{{-- @if ($category->count() > 0) --}}
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
   <h1 class="h2">Kategori Budaya</h1>
</div>
<form action="{{ route('budaya.index') }}" method="GET">
   <div class="input-group mb-3">
      <div class="col-md-5">
         <input name="search" type="text" class="form-control" placeholder="Cari Kategori Budaya Disini..." aria-label="search" aria-describedby="basic-addon2" value="{{ request('search') }}">
      </div>
      <button class="btn btn-primary" type="submit" id="button-addon2">
      <i class="ri-search-line"></i>
      </button>
   </div>
</form>
{{-- <a href="{{ route('budaya.create') }}" class="btn btn-primary mb-3">Tambahkan Data Budaya</a> --}}
<div class="container-fluid">
  <div class="row">
   <div class="dashboard-admin__grid">
   @foreach ($category as $item)
   <div class="card">
   <div class="card-body">
    <h5 class="card-title">{{ $item->category_name }}</h5>
    <a href="{{ $item->id === 1 ? '/masakan-khas' : ($item->id === 2 ? '/alat-musik' : ($item->id === 3 ? '/pakaian-adat' : ($item->id === 4 ? '/rumah-adat' : ($item->id === 5 ? '/tari-tradisional' : '#')))) }}" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Lihat Semua</a>
</div>
   </div>
   @endforeach
   </div>

  </div>
</div>
<div class="d-flex justify-content-center">
   {!! $category->links() !!}
</div>
{{-- @else
<div class="d-flex justify-content-center my-2">
   <div class="">
      <h2>No Budaya Found</h2>
   </div>
</div>
<div class="d-flex justify-content-center my-1">
   <div class=""><a href="{{ route('budaya.create') }}" class="btn btn-primary">Create new Budaya</a></div>
</div>
@endif --}}
@endsection