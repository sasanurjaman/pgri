@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Carousel Start -->
<div class="header-carousel owl-carousel overflow-hidden bg-dark">
    <div class="header-carousel-item hero-section">
        <div class="hero-bg-half-1"></div>
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Selamat datang di PGRI Cisurupan
                            </h4>
                            <h1 class="display-1 text-white mb-4">Website Resmi PGRI Cisurupan</h1>
                            <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy...
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                <a class="btn btn-dark py-3 px-4 px-md-5 me-2" href="#"><i
                                        class="fas fa-play-circle me-2"></i> <span>Watch Video</span></a>
                                <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#"><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-carousel-item hero-section">
        <div class="hero-bg-half-2"></div>
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-7 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <h4 class="text-primary text-uppercase fw-bold mb-4">Selamat datang di PGRI Cisurupan
                            </h4>
                            <h1 class="display-2 text-white mb-4">Tata Tengtrem Kerta Raharja</h1>
                            <p class="mb-5 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy...
                            </p>
                            <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                <a class="btn btn-dark py-3 px-4 px-md-5 me-2" href="#"><i
                                        class="fas fa-play-circle me-2"></i> <span>Watch Video</span></a>
                                <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="#"><span>Learn
                                        More</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- About Start -->
<div class="container-fluid about pt-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="about-content h-100">
                    <h4 class="text-primary">Mengenal PGRI Cisurupan</h4>
                    <h1 class="display-4 text-white mb-4">Sampbutan Ketua PGRI Cisurupan</h1>
                    <p class="mb-4">Assalamu’alaikum warahmatullahi wabarakatuh. Puji syukur ke hadirat Allah SWT atas
                        segala rahmat dan karunia-Nya...</p>
                    <div class="tab-class pb-4">
                        <ul class="nav d-flex mb-2">
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 active" data-bs-toggle="pill" href="#tab-1">
                                    <span style="width: 150px;">Misi</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2 mx-3" data-bs-toggle="pill" href="#tab-2">
                                    <span style="width: 150px;">Visi</span>
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="d-flex py-2" data-bs-toggle="pill" href="#tab-3">
                                    <span style="width: 150px;">Sejarah</span>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center border-top border-bottom py-4">
                                            <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                            <p class="mb-0">
                                                1. Meningkatkan profesionalisme guru dan tenaga kependidikan melalui
                                                pengembangan kompetensi, inovasi, literasi, dan pemanfaatan
                                                teknologi dalam pendidikan.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center border-top border-bottom py-4">
                                            <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                            <p class="mb-0">“Terwujudnya PGRI Cabang Cisurupan yang solid,
                                                profesional, mandiri, bermartabat, dan berdaya saing dalam
                                                meningkatkan mutu pendidikan serta memperjuangkan kesejahteraan dan
                                                profesionalisme guru dan tenaga kependidikan”.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane fade show p-0">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-items-center border-top border-bottom py-4">
                                            <span class="fas fa-rocket text-white fa-4x me-4"></span>
                                            <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and
                                                typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s, when an unknown printer took a
                                                galley of type and scrambled it to make a type specimen book. It has
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-6">
                            <a href="#" class="btn btn-primary py-3 px-5"> <span>Make Appointment</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="about-img h-100">
                    <div class="about-img-inner d-flex h-100">
                        <img src="/assets/img/about-2.png" class="img-fluid w-100" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Fitness Goal start -->
<div class="container-fluid goal pt-5">
    <div class="container pt-5">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="goal-content">
                    <h4 class="text-primary">Agenda</h4>
                    <h1 class="display-4 mb-4">Agenda Kegiatan</h1>
                    <div class="goal-item d-flex p-4">
                        <div class="d-flex me-4">
                            <div class="bg-primary d-inline p-3" style="width: 80px; height: 80px;">
                                <img src="/assets/img/icon-1.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div>
                            <h4>Free Fitness Training</h4>
                            <p class="text-white mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Tempore est harum</p>
                        </div>
                    </div>
                    <div class="goal-item d-flex p-4 mb-4">
                        <div class="d-flex me-4">
                            <div class="bg-primary d-inline p-3" style="width: 80px; height: 80px;">
                                <img src="/assets/img/icon-6.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div>
                            <h4>Cardio and Strength</h4>
                            <p class="text-white mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Tempore est harum</p>
                        </div>
                    </div>
                    <div class="ms-1">
                        <a href="#" class="btn btn-primary py-3 px-5 ms-2"> <span>Read Details</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.2s">
                <div class="h-100">
                    <img src="/assets/img/fitness-goal-banner.png" class="img-fluid h-100" style="object-fit: cover;"
                        alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fitness Goal End -->

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


<!-- Courses Start -->
<div class="container-fluid courses overflow-hidden py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Penghargaan</h4>
            <h1 class="display-4 text-white mb-4">Out Our Highlights Below</h1>
            <p class="text-white mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci
                facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa
                deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row gy-4 gx-0 justify-content-center">
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="courses-item">
                    <div class="courses-item-inner p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="courses-icon-img p-3">
                                <img src="/assets/img/icon-1.png" class="img-fluid" alt="">
                            </div>
                            <div class="data-info d-flex flex-column">
                                <div class="courses-trainer d-flex align-items-center mb-1">
                                    <div class="me-2" style="width: 25px; height: 25px;">
                                        <img src="/assets/img/testimonial-3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <p class="mb-0">Paul Flavius</p>
                                </div>
                                <div class="courses-date">
                                    <p class="mb-1">Date: Saturday</p>
                                    <p class="mb-0">Time: 06.00 - 07.00</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="d-inline-block h4 mb-3"> Gym Fitness Class</a>
                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo
                            placeat.
                        </p>
                        <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="courses-item">
                    <div class="courses-item-inner p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="courses-icon-img p-3">
                                <img src="/assets/img/icon-2.png" class="img-fluid" alt="">
                            </div>
                            <div class="data-info d-flex flex-column">
                                <div class="courses-trainer d-flex align-items-center mb-1">
                                    <div class="me-2" style="width: 25px; height: 25px;">
                                        <img src="/assets/img/testimonial-3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <p class="mb-0">Paul Flavius</p>
                                </div>
                                <div class="courses-date">
                                    <p class="mb-1">Date: Saturday</p>
                                    <p class="mb-0">Time: 06.00 - 07.00</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="d-inline-block h4 mb-3"> Power Lifting Class</a>
                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo
                            placeat.
                        </p>
                        <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="courses-item">
                    <div class="courses-item-inner p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="courses-icon-img p-3">
                                <img src="/assets/img/icon-3.png" class="img-fluid" alt="">
                            </div>
                            <div class="data-info d-flex flex-column">
                                <div class="courses-trainer d-flex align-items-center mb-1">
                                    <div class="me-2" style="width: 25px; height: 25px;">
                                        <img src="/assets/img/testimonial-3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <p class="mb-0">Paul Flavius</p>
                                </div>
                                <div class="courses-date">
                                    <p class="mb-1">Date: Saturday</p>
                                    <p class="mb-0">Time: 06.00 - 07.00</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="d-inline-block h4 mb-3"> Body Building Class</a>
                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo
                            placeat.
                        </p>
                        <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="courses-item">
                    <div class="courses-item-inner p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="courses-icon-img p-3">
                                <img src="/assets/img/icon-4.png" class="img-fluid" alt="">
                            </div>
                            <div class="data-info d-flex flex-column">
                                <div class="courses-trainer d-flex align-items-center mb-1">
                                    <div class="me-2" style="width: 25px; height: 25px;">
                                        <img src="/assets/img/testimonial-3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <p class="mb-0">Paul Flavius</p>
                                </div>
                                <div class="courses-date">
                                    <p class="mb-1">Date: Saturday</p>
                                    <p class="mb-0">Time: 06.00 - 07.00</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="d-inline-block h4 mb-3"> Aerobics & Skipping Class</a>

                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo
                            placeat.
                        </p>
                        <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                <div class="courses-item">
                    <div class="courses-item-inner p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="courses-icon-img p-3">
                                <img src="img/icon-5.png" class="img-fluid" alt="">
                            </div>
                            <div class="data-info d-flex flex-column">
                                <div class="courses-trainer d-flex align-items-center mb-1">
                                    <div class="me-2" style="width: 25px; height: 25px;">
                                        <img src="img/testimonial-3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <p class="mb-0">Paul Flavius</p>
                                </div>
                                <div class="courses-date">
                                    <p class="mb-1">Date: Saturday</p>
                                    <p class="mb-0">Time: 06.00 - 07.00</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="d-inline-block h4 mb-3"> Boxing Class</a>
                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo
                            placeat.
                        </p>
                        <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="courses-item">
                    <div class="courses-item-inner p-4">
                        <div class="d-flex justify-content-between mb-4">
                            <div class="courses-icon-img p-3">
                                <img src="img/icon-6.png" class="img-fluid" alt="">
                            </div>
                            <div class="data-info d-flex flex-column">
                                <div class="courses-trainer d-flex align-items-center mb-1">
                                    <div class="me-2" style="width: 25px; height: 25px;">
                                        <img src="/assets/img/testimonial-3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <p class="mb-0">Paul Flavius</p>
                                </div>
                                <div class="courses-date">
                                    <p class="mb-1">Date: Saturday</p>
                                    <p class="mb-0">Time: 06.00 - 07.00</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="d-inline-block h4 mb-3"> Cardio Class</a>
                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Atque tempora illo
                            placeat.
                        </p>
                        <a href="#" class="btn btn-primary py-2 px-4"> <span>Read More</span></a>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.2s">
                <a href="#" class="btn btn-primary py-3 px-5"> <span>More Courses</span></a>
            </div>
        </div>
    </div>
</div>
<!-- Courses End -->

<!-- Blog Start -->
<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Berita</h4>
            <h1 class="display-4 mb-4">Check out our latest stories</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                sint dolorem autem obcaecati, ipsam mollitia hic.
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
                    <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta
                        impedit eligendi? Quibusdam, laudantium.</p>
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
                    <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta
                        impedit eligendi? Quibusdam, laudantium.</p>
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
                    <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta
                        impedit eligendi? Quibusdam, laudantium.</p>
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
                    <p class="mb-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius libero soluta
                        impedit eligendi? Quibusdam, laudantium.</p>
                    <a href="#" class="btn btn-dark py-2 px-4 ms-2"> <span class="me-2">Read More</span> <i
                            class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->

<!-- Explore Fitness Start -->
<div class="container-fluid explore py-5 wow zoomIn" data-wow-delay="0.2s">
    <div class="container py-5 text-center">
        <h1 class="display-1 text-white mb-0">Mengenal Lebih Dalam</h1>
        <a class="btn btn-primary py-3 px-4 px-md-5 me-2" href="https://www.youtube.com/@pgricisurupan2240/videos"><i
                class="fas fa-play-circle me-2"></i>
            <span>Watch Video</span></a>
    </div>
</div>
<!-- Explore Fitness End -->


<!-- Team Start -->
<div class="container-fluid team py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary">Kepengurusan</h4>
            <h1 class="display-4 mb-4">Pengurus PGRI Cabang Cisurupan</h1>
            <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                sint dolorem autem obcaecati, ipsam mollitia hic.
            </p>
        </div>
        <div class="row gy-5 gy-lg-4 gx-4">
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="/assets/img/team-1.jpeg" class="img-fluid w-100" alt="Image">
                        <div class="team-icon">
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h4>Hidayat, S.Pd, M.Pd, MCE.</h4>
                        <p class="mb-0">Ketua Cabang PGRI Cisurupan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="/assets/img/team-2.jpeg" class="img-fluid w-100" alt="Image">
                        <div class="team-icon">
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h4>Budi Firdaus, S.Pd, M.Pd.</h4>
                        <p class="mb-0">Wakil Ketua 1</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="/assets/img/team-3.jpg" class="img-fluid w-100" alt="Image">
                        <div class="team-icon">
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h4>Trainer Name</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="/assets/img/team-4.jpg" class="img-fluid w-100" alt="Image">
                        <div class="team-icon">
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h4>Trainer Name</h4>
                        <p class="mb-0">Profession</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection