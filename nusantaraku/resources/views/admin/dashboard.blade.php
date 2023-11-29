@extends('admin.layouts.app')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
    <h1>{{ $tarian->tarian_name }}-{{ $prov->province_name }}-{{ $budaya->category_name }}</h1>
    <h1>
        @foreach ($komentar as $item)
        <h3>{{ $item->body_comment }}</h3>
        @endforeach
    </h1>
</div>

<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

@endsection
