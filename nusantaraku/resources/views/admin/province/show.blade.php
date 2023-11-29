@extends('admin.layouts.app')

@section('container')
<div class="container">
    <div class="row mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $province->province_name }}</h2>
            <div class="mb-3">
            <a href="{{ route('province.index') }}" class="btn btn-success"><i class="bi bi-arrow-left-circle"></i>
                Back To All Of My Province</a>
            <a href="{{ route('province.edit',$province->id) }}" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Edit</a>
            <form class="d-inline" action="{{ route('province.destroy',$province->id) }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger" onclick="return confirm('Yakin Di Hapus?')"><i class="bi bi-bookmark-x-fill"></i></i>Delete</button>
            </form>
            </div>
            <article class="my-3 fs-5">
                <label for=""><strong>Description : </strong></label>
                {{  $province->deskripsi  }}
            </article>
            <article class="my-3 fs-5 mb-3">
                <label for=""><strong>History : </strong></label>
                {{  $province->sejarah  }}
            </article>
        </div>
    </div>
</div>
@endsection
