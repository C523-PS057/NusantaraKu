@extends('admin.layouts.app')

@section('container')
<div class="container">
    <div class="row mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $category->category_name }}</h2>
            <div class="mb-3">
            <a href="{{ route('budaya.index') }}" class="btn btn-success"><i class="bi bi-arrow-left-circle"></i>
                Back To All Of My Budaya</a>
            <a href="{{ route('budaya.edit',$category->id) }}" class="btn btn-warning"><i class="bi bi-pencil-fill"></i> Edit</a>
            <form class="d-inline" action="{{ route('budaya.destroy',$category->id) }}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger" onclick="return confirm('Yakin Di Hapus?')"><i class="bi bi-bookmark-x-fill"></i></i>Delete</button>
            </form>
            </div>
            <article class="my-3 fs-5">
                <label for=""><strong>Image : </strong></label>
                <br>
                <img src="{{ Storage::url($category->gambar) }}" alt="Budaya Image" style="width:100%">
            </article>
        </div>
    </div>
</div>
<div class="container">
    <h2>Masakan</h2>
    <div class="card-dis">
        @foreach ($category->masakan as $item)
            <div class="card">
                <img class="card-img-top" src="{{ Storage::url($item->gambar) }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->category_name }}</h5>
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
</div>
@endsection
