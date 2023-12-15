@extends('admin.layouts.app')
@section('container')
@if ($data->count() > 0)
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kelola Data Komentar</h1>
</div>
<form action="{{ route('data-comment.index') }}" method="GET">
    <div class="input-group mb-3">
        <div class="col-md-5">
            <input name="search" type="text" class="form-control" placeholder="Cari Data Komentar/Nama Pengomentar..."
                aria-label="search" aria-describedby="basic-addon2" value="{{ request('search') }}">
        </div>
        <button class="btn btn-primary" type="submit" id="button-addon2">
            <i class="ri-search-line"></i>
        </button>
    </div>
</form>
<div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pengomentar</th>
                <th scope="col">Budaya</th>
                <th scope="col">Isi Komentar</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->user->name }}</td>
                <td>{{ $item->budaya->category_name }}</td>
                <td>{{ Str::limit($item->body_comment,15, '...') }}</td>
                <td class="column-action">
                    @if ($item->budaya_id == 1)
                    <a href="{{ route('detail-masakan.show',$item->masakan_id) }}" class="btn-icon"
                        style="text-decoration: none" target="_blank" rel="noopener noreferrer">
                        <i class="ri-eye-fill"></i>
                    </a>
                    @elseif ($item->budaya_id == 2)
                    <a href="{{ route('detail-musik.show',$item->musik_id) }}" class="btn-icon"
                        style="text-decoration: none" target="_blank" rel="noopener noreferrer">
                        <i class="ri-eye-fill"></i>
                    </a>
                    @elseif ($item->budaya_id == 3)
                    <a href="{{ route('detail-pakaian.show',$item->pakaian_id) }}" class="btn-icon"
                        style="text-decoration: none" target="_blank" rel="noopener noreferrer">
                        <i class="ri-eye-fill"></i>
                    </a>
                    @elseif ($item->budaya_id == 4)
                    <a href="{{ route('detail-rumah.show',$item->rumah_id) }}" class="btn-icon"
                        style="text-decoration: none" target="_blank" rel="noopener noreferrer">
                        <i class="ri-eye-fill"></i>
                    </a>
                    @elseif ($item->budaya_id == 5)
                    <a href="{{ route('detail-tari.show',$item->tari_id) }}" class="btn-icon"
                        style="text-decoration: none" target="_blank" rel="noopener noreferrer">
                        <i class="ri-eye-fill"></i>
                    </a>
                    @endif
                    <form class="d-inline" style="margin-left: 10px;"
                        action="{{ route('data-comment.destroy',$item->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="badge bg-danger border-0" onclick="return confirm('Yakin Di Hapus?')">
                            <i class="ri-delete-bin-line" style="font-size: 20px"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="d-flex justify-content-center">
    {!! $data->links() !!}
</div>
@else
<div class="d-flex justify-content-center my-2">
    <div>
        <h3>Tidak Ada Data Komentar</h2>
    </div>
</div>
@endif
@endsection