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

        {{-- Judul Galeri --}}
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h1 class="display-4 mb-4">Galeri</h1>
        </div>

        {{-- Grid Galeri tanpa Owl Carousel --}}
        <div class="row g-4 mb-4">

            @forelse ($galleries as $gallery)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="feature-item wow fadeInUp h-100" data-wow-delay="0.2s">

                    {{-- Gambar --}}
                    <div class="feature-img">
                        <img src="{{ $gallery->gallery_image
                                    ? asset('storage/' . $gallery->gallery_image)
                                    : asset('assets/img/noimage.jpeg') }}" class="img-fluid w-100"
                            alt="{{ $gallery->gallery_name }}">
                    </div>

                    {{-- Nama Galeri --}}
                    <div class="feature-content p-4">
                        <h4 class="mb-0">
                            {{ $gallery->gallery_name }}
                        </h4>
                    </div>

                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p class="text-muted">
                    Belum ada galeri yang tersedia.
                </p>
            </div>
            @endforelse

        </div>

        {{ $galleries->links() }}


    </div>
</div>
<!-- Features End -->
@endsection