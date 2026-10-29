@extends('layouts.app')

@section('title', 'Berita')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Berita Terkini</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-primary">Blog</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">

        {{-- Judul berita --}}
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">

            <h1 class="display-4 mb-4">Berita</h1>

            <p class="mb-0">
                Berita terkini seputar PGRI Cisurupan, kegiatan dan informasi terbaru di sekitar
            </p>
        </div>

        {{-- Grid berita tanpa Owl Carousel --}}
        <div class="row g-4 mb-4">

            @forelse ($blogs as $blog)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="blog-item wow fadeInUp h-100" data-wow-delay="0.2s">

                    {{-- Gambar berita --}}
                    <div class="blog-img p-4 pb-0">
                        <a href="#">
                            @if ($blog->blog_image)
                            <img src="{{ asset('storage/'. $blog->blog_image)}}" class="img-fluid w-100"
                                style="height: 200px" alt="{{ $blog->blog_title}}">
                            @else
                            <img src="/assets/img/noimage.jpeg" class="img-fluid w-100"
                                style="height: 200px; object-fit: cover" alt="no image">
                            @endif
                        </a>
                    </div>

                    {{-- Konten berita --}}
                    <div class="blog-content p-4">
                        <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                            {{-- Tambahkan tanggal atau informasi berita jika diperlukan --}}
                        </div>

                        <a href="#" class="h4 d-inline-block mb-3">
                            {{ $blog->blog_title }}
                        </a>

                        <p class="mb-3">
                            {{ Str::limit(strip_tags($blog->blog_description), 100, '...') }}
                        </p>

                        <a href="#" class="btn btn-dark py-2 px-4 ms-2">
                            <span class="me-2">Baca Selengkapnya</span>
                            <i class="fa fa-arrow-right"></i>
                        </a>
                    </div>

                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p class="text-muted">Belum ada berita yang tersedia.</p>
            </div>
            @endforelse

        </div>

        {{-- Pagination --}}
        {{-- @if ($blogs->hasPages())
        <div class="d-flex justify-content-center mt-5">
        </div>
        @endif --}}
        {{ $blogs->links() }}

    </div>
</div>

<!-- Blog End -->
@endsection