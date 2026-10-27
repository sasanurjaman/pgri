@extends('layouts.app')
@section('title', 'Agenda')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Agenda Kami</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-primary">Agenda</li>
        </ol>
    </div>
</div>
<!-- Header End -->

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

@endsection