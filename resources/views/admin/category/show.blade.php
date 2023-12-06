@extends('admin.layouts.app')

@section('container')
<div class="container">
    <div class="row mb-5">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $category->category_name }}</h2>
            <div class="mb-3">
            <a href="{{ route('budaya.index') }}" class="btn btn-success"><i class="bi bi-arrow-left-circle"></i>
                Back To All Of My Budaya</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    @if ($category->id == 1)
    <h2>{{ $category->category_name }}</h2>
    <div class="card-dis">
        @foreach ($masakan as $item)
            <div class="card">
                <img class="card-img-top" src="{{ Storage::url($item->gambar) }}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->province->province_name }}</h5>
                    <h5 class="card-title">{{ $item->alat_musik_name }}</h5>
                  <a href="{{ route('masakan.show',$item->id) }}" class="btn btn-primary">Detail</a>
                  <a href="{{ route('masakan.edit',$item->id) }}" class="btn btn-primary my-2">Edit</a>
                  <form action="{{ route('masakan.destroy',$item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="width: 100%" onclick="return confirm('Yakin Di Hapus?')">Delete</button>
                </form>
                </div>
              </div>
              @endforeach
        </div>

    @elseif ($category->id == 2)
    <h2>{{ $category->category_name }}</h2>
    <div class="card-dis">
        @foreach ($musik as $item)
            <div class="card">
                <img class="card-img-top" src="{{ Storage::url($item->gambar) }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->province->province_name }}</h5>
                  <h5 class="card-title">{{ $item->alat_musik_name }}</h5>
                  <a href="{{ route('musik.show',$item->id) }}" class="btn btn-primary">Detail</a>
                  <a href="{{ route('musik.edit',$item->id) }}" class="btn btn-primary my-2">Edit</a>
                  <form action="{{ route('musik.destroy',$item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="width: 100%" onclick="return confirm('Yakin Di Hapus?')">Delete</button>
                </form>
                </div>
              </div>
              @endforeach
        </div>

    @elseif ($category->id == 3)
    <h2>{{ $category->category_name }}</h2>
    <div class="card-dis">
        @foreach ($pakaian as $item)
            <div class="card">
                <img class="card-img-top" src="{{ Storage::url($item->gambar) }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->province->province_name }}</h5>
                  <h5 class="card-title">{{ $item->pakaian_name }}</h5>
                  <a href="{{ route('pakaian.show',$item->id) }}" class="btn btn-primary">Detail</a>
                  <a href="{{ route('pakaian.edit',$item->id) }}" class="btn btn-primary my-2">Edit</a>
                  <form action="{{ route('pakaian.destroy',$item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="width: 100%" onclick="return confirm('Yakin Di Hapus?')">Delete</button>
                </form>
                </div>
              </div>
              @endforeach
        </div>

    @elseif ($category->id == 4)
    <h2>{{ $category->category_name }}</h2>
    <div class="card-dis">
        @foreach ($rumah as $item)
            <div class="card">
                <img class="card-img-top" src="{{ Storage::url($item->gambar) }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->province->province_name }}</h5>
                  <h5 class="card-title">{{ $item->rumah_adat_name }}</h5>
                  <a href="{{ route('rumah.show',$item->id) }}" class="btn btn-primary">Detail</a>
                  <a href="{{ route('rumah.edit',$item->id) }}" class="btn btn-primary my-2">Edit</a>
                  <form action="{{ route('rumah.destroy',$item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="width: 100%" onclick="return confirm('Yakin Di Hapus?')">Delete</button>
                </form>
                </div>
              </div>
              @endforeach
        </div>

    @elseif ($category->id == 5)
    <h2>{{ $category->category_name }}</h2>
    <div class="card-dis">
        @foreach ($tari as $item)
            <div class="card">
                <img class="card-img-top" src="{{ Storage::url($item->gambar) }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->province->province_name }}</h5>
                  <h5 class="card-title">{{ $item->tarian_name }}</h5>
                  <a href="{{ route('tari.show',$item->id) }}" class="btn btn-primary">Detail</a>
                  <a href="{{ route('tari.edit',$item->id) }}" class="btn btn-primary my-2">Edit</a>
                  <form action="{{ route('tari.destroy',$item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="width: 100%" onclick="return confirm('Yakin Di Hapus?')">Delete</button>
                </form>
                </div>
              </div>
              @endforeach
        </div>

    @endif
</div>
@endsection