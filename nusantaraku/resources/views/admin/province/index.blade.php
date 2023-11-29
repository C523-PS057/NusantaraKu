@extends('admin.layouts.app')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Province</h1>
  </div>
  <div class="table-responsive col-lg-8">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new Post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        {{-- @foreach ($posts as $post)

        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td>{{ $post->category->name }}</td>
          <td>
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i class="bi bi-bullseye"></i></a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-fill"></i></a>
            <form class="d-inline" action="/dashboard/posts/{{ $post->slug }}" method="POST">
                @csrf
                @method('delete')
                <button class="badge bg-danger border-0" onclick="return confirm('Yakin Di Hapus?')"><i class="bi bi-bookmark-x-fill"></i></i></button>
            </form>
          </td>
        </tr>
        @endforeach --}}
      </tbody>
    </table>
  </div>
@endsection
