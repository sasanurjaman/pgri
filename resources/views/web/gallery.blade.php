@extends('layouts.app')

@section('title', 'Galeri')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Galeri</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-primary">Galeri</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Features Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"> Gallery</h4>
            <h1 class="display-4 mb-4">Out Our Highlights Below</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="feature-carousel owl-carousel">
            <div class="feature-item wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-img">
                    <img src="/assets/img/feature-1.jpeg" class="img-fluid w-100" alt="">
                </div>
                <div class="feature-content p-4">
                    <h4 class="mb-3">Konferensi Kerja Cabang</h4>
                </div>
            </div>
            <div class="feature-item wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-img">
                    <img src="/assets/img/feature-2.jpeg" class="img-fluid w-100" alt="">
                </div>
                <div class="feature-content p-4">
                    <h4 class="mb-3">Sambutan Ketua PGRI Cabang Cisurupan</h4>
                </div>
            </div>
            <div class="feature-item wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-img">
                    <img src="/assets/img/feature-3.jpeg" class="img-fluid w-100" alt="">
                </div>
                <div class="feature-content p-4">
                    <h4 class="mb-3">Prakata Pembina</h4>
                </div>
            </div>
            <div class="feature-item">
                <div class="feature-img">
                    <img src="/assets/img/feature-4.jpeg" class="img-fluid w-200" alt="">
                </div>
                <div class="feature-content p-4">
                    <h4 class="mb-3">Pengurus Inti PGRI Cisurupan</h4>
                </div>
            </div>
        </div>
        <div class="feature-shaps"></div>
    </div>
</div>
<!-- Features End -->
@endsection