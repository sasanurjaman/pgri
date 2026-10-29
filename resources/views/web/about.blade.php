@extends('layouts.app')
@section('title', 'Tentang Kami')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Tentang Kami</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-primary">About</li>
        </ol>
    </div>
</div>
<!-- Header End -->

<!-- About Start -->
<div class="container-fluid about pt-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-content h-100">
                    {{-- <h4 class="text-primary">{{ $opening->about_title ?? 'Sambutan Ketua PGRI Cisurupan' }}</h4>
                    --}}
                    <h1 class="display-4 text-white mb-4 text-capitalize">{{ $opening->about_title ?? 'Sambutan Ketua
                        PGRI Cisurupan' }}
                    </h1>
                    <p class="mb-4">{!! $opening->about_description !!}</p>
                    <div class="tab-class pb-4">
                        <ul class="nav d-flex mb-2">
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 active" data-bs-toggle="pill" href="#visi">
                                    <span style="width: 150px;">Visi</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 mx-3" data-bs-toggle="pill" href="#Misi">
                                    <span style="width: 150px;">Misi</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2" data-bs-toggle="pill" href="#history">
                                    <span style="width: 150px;">Sejarah</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="visi" class="tab-pane fade show p-0 active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center border-top border-bottom py-4">
                                            <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                            <p class="mb-0">{!! $visi->about_description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="Misi" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center border-top border-bottom py-4">
                                            <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                            <p class="mb-0">{!! $misi->about_description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="history" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center border-top border-bottom py-4">
                                            <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                            <p class="mb-0">{!! $history->about_description !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-img">
                    <div class="about-img-inner d-flex">
                        <img src="/assets/img/about-2.png" class="img-fluid" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Explore Fitness Start -->
<div class="container-fluid explore py-5 wow zoomIn" data-wow-delay="0.2s">
    <div class="container py-5 text-center">
        <h1 class="display-1 text-white mb-0"> Explore Fitness Center</h1>
        <a class="btn btn-primary py-3 px-4 px-md-5 me-2" href="https://www.youtube.com/embed/DWRcNpR6Kdc"><i
                class="fas fa-play-circle me-2"></i> <span>Watch Video</span></a>
    </div>
</div>
<!-- Explore Fitness End -->

@endsection