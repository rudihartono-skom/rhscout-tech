@extends('layouts.app')
@section('title')
    Product
@endsection
@section('content')
    <h1>Product</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
        </ol>
    </nav>
    <hr>
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-md-6">
                    Data Product PT. RhScout Technology</div>
                <div class="col-md-6 text-end">
                    <a class="btn btn-outline-danger" href="/createproduct" role="button"><i
                            class="bi bi-plus-circle me-1"></i> Insert Product</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">stock</th>
                        <th scope="col">suplayer</th>
                        <th scope="col">status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td><img src="{{ asset('storage/uploads/' . $item->product_image) }}" alt=""
                                    width="80">
                            </td>
                            <td>{{ $item->product }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->stock }}</td>
                            <td>{{ $item->suplayer }}</td>
                            <td>{{ $item->status }}</td>
                            <td>
                                <a class="btn btn-success" href="/editproduct/{{ $item->id }}" role="button"><i
                                        class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-danger" href="/deleteproduct/{{ $item->id }}" role="button"><i
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
