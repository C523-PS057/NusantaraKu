@extends('admin.layouts.app')
@section('container')
@if ($kategory->count() > 0)
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Province</h1>
  </div>
  <form action="{{ route('province.index') }}" method="GET">
  <div class="input-group mb-3">
    <div class="col-md-5">
        <input name="search" type="text" class="form-control" placeholder="Cari Nama Siswa" aria-label="Cari Nama" aria-describedby="basic-addon2" value="{{ request('search') }}">
    </div>
    <button class="btn btn-outline-primary" type="submit" id="button-addon2">
        <i class="ri-search-line"></i>
    </button>
  </div>
  </form>
  <div class="table-responsive col-lg-8">
    <a href="{{ route('province.create') }}" class="btn btn-primary mb-3">Create new Province</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Province Name</th>
          <th scope="col">Description</th>
          <th scope="col">History</th>
          <th scope="col">Video Link</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kategory as $item)

        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $item->province_name }}</td>
          <td>{{ Str::limit($item->deskripsi, 10, '...') }}</td>
          <td>{{ Str::limit($item->sejarah,10, '...') }}</td>
          <td><a href="{{ $item->video_link }}" target="blank">Video Link</a></td>
          <td>
            <a href="{{ route('province.show',$item->id) }}" style="text-decoration: none">
                <i class="ri-eye-fill" style="font-size: 20px"></i>
            </a>
            <a href="{{ route('province.edit',$item->id) }}" class="mx-2" style="text-decoration: none">
                <i class="ri-edit-line" style="font-size: 20px; color: #fcba03"></i>
            </a>
            <form class="d-inline" action="{{ route('province.destroy',$item->id) }}" method="POST">
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
    {!! $kategory->links() !!}
</div>
  @else
    <div class="d-flex justify-content-center my-2">
        <div class=""><h2>No Province Found</h2></div>
    </div>
    <div class="d-flex justify-content-center my-1">
        <div class=""><a href="{{ route('province.create') }}" class="btn btn-primary">Create new Province</a></div>
    </div>
@endif
@endsection
