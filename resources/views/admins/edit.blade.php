@extends('layouts.app')
@section('title')
    Create Admin
@endsection
@section('content')
    <h1><i class="bi bi-people-fill"></i> Admin</h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="/admin">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">Create Admin</li>
        </ol>
    </nav>
    <hr>
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-md-6">
                    Formulir Admin PT. RhScout Technology</div>
                <div class="col-md-6 text-end">
                    <a class="btn btn-outline-danger" href="/admin" role="button"><i
                            class="bi bi-arrow-left-circle me-1"></i>Kembali</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="/updateadmin/{{ $admin->id }}" class="row" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3 col-md-6">
                    <label for="nm" class="form-label">Nama Admin</label>
                    <input type="text" class="form-control" name="nama_admin" id="nm"
                        value="{{ $admin->nama_admin }}">
                    {{-- <div id="nmFeedback" class="invalid-feedback"> --}}
                    @error('nama_admin')
                        {{ $message }}
                    @enderror
                    {{-- </div> --}}
                </div>
                <div class="mb-3 col-md-6">
                    <label for="jk" class="form-label">Jenis Kelamin</label>
                    <select name="jk_admin" id="jk" class="form-select">
                        @if ($admin->jk_admin == 'Pria')
                            <option value="{{ $admin->jk_admin }}">{{ $admin->jk_admin }}</option>
                            <option value="Wanita">Wanita</option>
                            <option value="Khusus">Khusus</option>
                        @elseif ($admin->jk_admin == 'Wanita')
                            <option value="{{ $admin->jk_admin }}">{{ $admin->jk_admin }}</option>
                            <option value="Pria">Pria</option>
                            <option value="Khusus">Khusus</option>
                        @else
                            <option value="{{ $admin->jk_admin }}">{{ $admin->jk_admin }}</option>
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        @endif
                    </select>
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">Email Admin</label>
                    <input type="email" class="form-control" name="email_admin" id="email"
                        value="{{ $admin->email_admin }}">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="nohp" class="form-label">No. Handphone</label>
                    <input type="text" class="form-control" name="nohp_admin" id="nohp"
                        value="{{ $admin->nohp_admin }}">
                </div>
                <div class="mb-3 col-md-6">
                    <label for="jbt" class="form-label">Jabatan Admin</label>
                    <input type="text" class="form-control" name="jabatan_admin" id="jbt"
                        value="{{ $admin->jabatan_admin }}">
                </div>
                <div class="mb-3 col-md-12">
                    <label for="alm" class="form-label">Alamat Admin</label>
                    <textarea name="alamat_admin" class="form-control" id="alm" rows="5">{{ $admin->alamat_admin }}</textarea>
                </div>
                <div class="mb-3 col-md-12">
                    <label for="ft" class="form-label">Foto Admin</label>
                    <input type="hidden" name="foto_lama" id="ft" value="{{ $admin->foto_admin }}">
                    <input type="file" class="form-control" name="foto_admin" id="ft" accept="image/*">
                </div>
                <div class="mb-3 col-md-12">

                    <button type="submit" class="btn btn-danger"><i class="bi bi-floppy me-2"></i>Save Admin</button>
                </div>
            </form>
        </div>
    </div>
@endsection
