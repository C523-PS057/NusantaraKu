@extends('admin.layouts.app')

@section('container')
<div class="container">
    <div class="row mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $data->alat_musik_name }}</h2>
            <div class="mb-3">
            <a href="{{ route('musik.index') }}" class="btn btn-success"><i class="bi bi-arrow-left-circle"></i>
                Back To All Of Alat Musik Khas</a>
            <a href="{{ route('musik.edit',$data->id) }}" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Edit</a>
            <a href="{{ route('province.show',$data->province->id) }}" class="btn btn-primary"><i class="bi bi-pencil-fill"></i>Province</a>
            <form class="d-inline" action="{{ route('musik.destroy',$data->id) }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger" onclick="return confirm('Yakin Di Hapus?')"><i class="bi bi-bookmark-x-fill"></i></i>Delete</button>
            </form>
            </div>
            <article class="my-3 fs-5">
                <label for=""><strong>Description : </strong></label>
                {{  $data->deskripsi  }}
            </article>
            <article class="my-3 fs-5 mb-3">
                <label for=""><strong>History : </strong></label>
                {{  $data->sejarah  }}
            </article>
            <article class="my-3 fs-5">
                <label for=""><strong>Image : </strong></label>
                <br>
                <img src="{{ Storage::url($data->gambar) }}" alt="Musik Image" style="width:80%">
            </article>
        </div>
    </div>
</div>
@endsection
