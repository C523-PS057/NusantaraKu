@extends('admin.layouts.app')
@section('container')
@if ($data->count() > 0)
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kelola Data Alat Musik</h1>
</div>
<form action="{{ route('musik.index') }}" method="GET">
    <div class="input-group mb-3 dashboard__search">
        <div class="col-md-5">
            <input name="search" type="text" class="form-control" placeholder="Cari Alat Musik.." aria-label="search"
                aria-describedby="basic-addon2" value="{{ request('search') }}">
        </div>
        <button class="btn btn-primary" type="submit" id="button-addon2">
            <i class="ri-search-line"></i>
        </button>
    </div>
</form>
<a href="{{ route('musik.create') }}" class="btn btn-primary mb-3">Tambahkan Data Alat Musik</a>
<div class="categories__content categories__content-admin">
    <div class="row">
        @foreach ($data as $item)
        <div class="col-6 col-md-3">
            <div class="detail__item">
                <div class="detail__item-image">
                    <img src="{{ Storage::url($item->gambar) }}" alt="Foto {{ $item->tarian_name }}" />
                    <span class="detail__item-province">
                        <i class="ri-map-pin-line"></i>
                        {{ $item->province->province_name }}
                    </span>
                </div>
                <div class="detail__item-content">
                    <h6>{{ $item->alat_musik_name }}</h6>
                    <p>Alat Musik</p>
                    <div class="detail__item-buttons">
                        <a href="/detail-musik/{{ $item->id }}" class="btn btn-outline" target="_blank"
                            rel="noopener noreferrer"><i class="ri-eye-line"></i> Lihat</a>
                        <a href="{{ route('musik.edit',$item->id) }}" class="btn btn-outline"><i
                                class="ri-edit-line"></i>Ubah</a>
                        <form action="{{ route('musik.destroy',$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary" style="width: 100%"
                                onclick="return confirm('Yakin hapus data alat musik ini?')"><i
                                    class="ri-delete-bin-line"></i> Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="d-flex justify-content-center">
    {!! $data->links() !!}
</div>
@else
<div class="d-flex justify-content-center my-2">
    <div class="">
        <h2>Tidak ada alat musik yang ditemukan</h2>
    </div>
</div>
<div class="d-flex justify-content-center my-1">
    <div class=""><a href="{{ route('musik.create') }}" class="btn btn-primary">Tambahkan Data Alat Musik</a></div>
</div>
@endif
@endsection