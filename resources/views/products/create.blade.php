@extends('layouts.app')
@section('title')
    Create Product
@endsection
@section('content')
    <h1>Product</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/product">Product</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Product</li>
        </ol>
    </nav>
    <hr>
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-md-6">
                    Formulir Product PT. RhScout Technology</div>
                <div class="col-md-6 text-end">
                    <a class="btn btn-outline-danger" href="/product" role="button"><i
                            class="bi bi-arrow-left-circle me-1"></i>Kembali</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="/saveproduct" class="row" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 col-md-6">
                    <label for="nm" class="form-label">Product</label>
                    <input type="text" class="form-control" name="product" id="nm"
                        placeholder="Masukan Product Name">
                    {{-- <div id="nmFeedback" class="invalid-feedback"> --}}
                    @error('product')
                        {{ $message }}
                    @enderror
                    {{-- </div> --}}
                </div>
                <div class="mb-3 col-md-6">
                    <label for="jk" class="form-label">Status</label>
                    <select name="status" id="jk" class="form-select">
                        <option value="">-- Pilih status Produk --</option>
                        <option value="best_product">best_product</option>
                        <option value="nonbest_product">nonbest_product</option>
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">Price</label>
                    <input type="text" class="form-control" name="price" id="email"
                        placeholder="Masukan Price Product">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="pass" class="form-label">Stock</label>
                    <input type="text" class="form-control" name="stock" id="pass"
                        placeholder="Masukan Stock Product">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">Suplayer</label>
                    <input type="text" class="form-control" name="suplayer" id="nohp"
                        placeholder="Masukan Suplayer">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="ft" class="form-label">Product Image</label>
                    <input type="file" class="form-control" name="product_image" id="ft" accept="image/*">
                </div>
                <div class="mb-3 col-md-12">
                    <button type="submit" class="btn btn-danger"><i class="bi bi-floppy me-2"></i>Save Product</button>
                </div>
            </form>
        </div>
    </div>
@endsection
