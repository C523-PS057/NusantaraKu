@extends('admin.layouts.app')
@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard Admin</h1>
</div>


<div class="row dashboard__stats">
    <div class="col-6 col-md-4">
        <a href="/admin/data-user" class="dashboard__stats-item">
            <h6>Total Pengguna</h6>
            <p>{{ $totalUser }} Orang</p>
        </a>
    </div>
    <div class="col-6 col-md-4">
        <a href="/admin/data-comment" class="dashboard__stats-item">
            <h6>Total Komentar</h6>
            <p>{{ $totalComment }} Komentar</p>
        </a>
    </div>
    <div class="col-6 col-md-4">
        <a href="/admin/budaya" class="dashboard__stats-item">
            <h6>Total Budaya</h6>
            <p>{{ $totalBudaya }} Halaman</p>
        </a>
    </div>
</div>


<canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

@endsection