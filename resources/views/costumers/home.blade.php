@extends('layouts.main')
@section('title')
    Home
@endsection
@section('content')
    <section class="hero">
        <main class="content">
            <h1>Lengkapi Kebutuhan Technology Anda!</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ex eaque, vero ipsam harum iusto animi?</p>
            <a href="/product" class="btn">Beli Sekarang</a>
        </main>
    </section>
    <section class="py-4 about container">
        <h1 class="text-center">About Us</h1>
        <div class="row mt-4">
            <div class="col-md-6">
                <img src="{{ asset('images/about3.jfif') }}" alt="" width="100%">
            </div>
            <div class="col-md-6">
                <h4 class="fst-italic text-decoration-underline mb-4">Kenapa Harus RhScoutTech</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio fugiat pariatur hic? Necessitatibus
                    quam assumenda totam voluptatibus quaerat facilis nisi repellat quis laborum animi? Qui vel nam
                    asperiores quas ab accusamus sapiente sit perspiciatis!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa et animi quam, facere eveniet vitae eos
                    aspernatur consectetur molestiae. Qui, adipisci. Repellendus, eveniet pariatur. Tenetur?</p>
            </div>
        </div>
    </section>

    <section class="py-3 product container">
        <h1 class="text-center mb-4">Best Product</h1>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('images/product1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h2 class="card-title fw-bold">-- Gantungan Kunci --</h2>
                        <p class="fs-5 fw-bold text-primary">Rp. 3.250</p>
                        <a href="/order" class="btn btn-outline-primary">Order Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <img src="{{ asset('images/product2.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body text-center">
                        <h2 class="card-title fw-bold">-- Kartu ID Card --</h2>
                        <p class="fs-5 fw-bold text-primary">Rp. 15.250</p>
                        <a href="/order" class="btn btn-outline-primary">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
