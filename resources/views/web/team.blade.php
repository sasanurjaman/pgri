@extends('layouts.app')

@section('title', 'Kepengurusan')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Kepengurusan</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-primary">Kepengurusan</li>
        </ol>
    </div>
</div>
<!-- Header End -->

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