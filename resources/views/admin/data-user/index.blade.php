@extends('admin.layouts.app')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kelola Data User</h1>
</div>
<form action="{{ route('province.index') }}" method="GET">
    <div class="input-group mb-3">
        <div class="col-md-5">
            <input name="search" type="text" class="form-control" placeholder="Cari Data Provinsi..."
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
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->role }}</td>
                <td class="column-action">
                    <a href="{{ route('user-settings.show',$item->id) }}" class="btn-icon" style="text-decoration: none" target="_blank" rel="noopener noreferrer">
                        <i class="ri-eye-fill"></i>
                    </a>
                    <a href="{{ route('user-settings.edit',$item->id) }}" class="btn-icon mx-2"
                        style="text-decoration: none">
                        <i class="ri-edit-line"></i>
                    </a>
                    <form class="d-inline" action="{{ route('user-settings.destroy',$item->id) }}" method="POST">
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
    {!! $users->links() !!}
</div>
@endsection
