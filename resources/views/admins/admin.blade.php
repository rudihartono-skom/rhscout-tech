@extends('layouts.app')
@section('title')
    Admin
@endsection
@section('content')
    <h1>Admin</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Admin</li>
        </ol>
    </nav>
    <hr>
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-md-6">
                    Data Admin PT. RhScout Technology</div>
                <div class="col-md-6 text-end">
                    <a class="btn btn-outline-danger" href="/createadmin" role="button"><i
                            class="bi bi-plus-circle me-1"></i> Insert Admin</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Hp</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($admin as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->nama_admin }}</td>
                            <td>{{ $item->jabatan_admin }}</td>
                            <td>{{ $item->nohp_admin }}</td>
                            <td><img src="{{ asset('storage/uploads/' . $item->foto_admin) }}" alt=""
                                    width="70px">
                            </td>
                            <td>
                                <a class="btn btn-primary" href="/detailadmin/{{ $item->id }}" role="button"><i
                                        class="bi bi-eye-fill"></i></a>
                                <a class="btn btn-success" href="/editadmin/{{ $item->id }}" role="button"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-danger" href="/deleteadmin/{{ $item->id }}" role="button"><i
                                        class="bi bi-trash3-fill"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

{{--
    product
    price
    stock
    suplayer
    status
--}}
