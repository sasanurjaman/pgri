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
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Berita</h4>
            <h1 class="display-4 mb-4">Check out our latest stories</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint
                dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="blog-carousel owl-carousel">
            <div class="blog-item wow fadeInUp" data-wow-delay="0.2s">
                <div class="blog-img p-4 pb-0">
                    <a href="#">
                        <img src="img/feature-4.jpg" class="img-fluid w-100" alt="">
                    </a>
                </div>
                <div class="blog-content p-4">
                    <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                        <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                        <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025</div>
                    </div>
                    <a href="#" class="h4 d-inline-block mb-3">Full Body Home Workout</a>
                    <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit
                        eligendi? Quibusdam, laudantium.</p>
                    <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span> <i
                            class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="blog-item wow fadeInUp" data-wow-delay="0.4s">
                <div class="blog-img p-4 pb-0">
                    <a href="#">
                        <img src="img/feature-3.jpg" class="img-fluid w-100" alt="">
                    </a>
                </div>
                <div class="blog-content p-4">
                    <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                        <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                        <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025</div>
                    </div>
                    <a href="#" class="h4 d-inline-block mb-3">31-Day Fitness Calendar</a>
                    <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit
                        eligendi? Quibusdam, laudantium.</p>
                    <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span> <i
                            class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="blog-item wow fadeInUp" data-wow-delay="0.6s">
                <div class="blog-img p-4 pb-0">
                    <a href="#">
                        <img src="img/feature-2.jpg" class="img-fluid w-100" alt="">
                    </a>
                </div>
                <div class="blog-content p-4">
                    <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                        <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                        <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025</div>
                    </div>
                    <a href="#" class="h4 d-inline-block mb-3">At Home Ab Workout</a>
                    <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit
                        eligendi? Quibusdam, laudantium.</p>
                    <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span> <i
                            class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="blog-item">
                <div class="blog-img p-4 pb-0">
                    <a href="#">
                        <img src="img/feature-1.jpg" class="img-fluid w-100" alt="">
                    </a>
                </div>
                <div class="blog-content p-4">
                    <div class="blog-comment d-flex justify-content-between py-2 px-3 mb-4">
                        <div class="small"><span class="fa fa-user text-primary me-2"></span> Martin.C</div>
                        <div class="small"><span class="fa fa-calendar text-primary me-2"></span> 30 Dec 2025</div>
                    </div>
                    <a href="#" class="h4 d-inline-block mb-3">Full Body Home Workout</a>
                    <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta impedit
                        eligendi? Quibusdam, laudantium.</p>
                    <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span> <i
                            class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection