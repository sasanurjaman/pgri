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
        </div>
        <div class="row gy-5 gy-lg-4 gx-4">
            @foreach ($teams as $team)
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        @if ($team->team_image)
                        <img src="{{ asset('storage/' . $team->team_image)}}" class="img-fluid w-100" alt="Image">
                        @else
                        <img src="/assets/img/noimage.jpeg" class="img-fluid w-100" alt="no image">
                        @endif
                        <div class="team-icon">
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="team-content">
                        <h4>{{ $team->team_name }}</h4>
                        <p class="mb-0">{{ $team->team_position }}</p>
                    </div>
                </div>
            </div>
            @endforeach

            {{ $teams->links()}}
        </div>
    </div>
</div>
<!-- Team End -->

@endsection