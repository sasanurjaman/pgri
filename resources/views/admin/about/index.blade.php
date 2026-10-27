@extends('layouts.admin.admin')
@section('title', 'Tentang')
@section('content')
<div class="pagetitle">
    <h1>Blank Page</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Tentang</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">

    <div class="card">
        <div class="card-body">

            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <h5 class="card-title">Tentang PGRI Cisurupan</h5>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($abouts as $about)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $about->about_title}}</td>
                        <td>{{ Str::limit(strip_tags($about->about_description), 100, '...') }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-light btn-sm border-0" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" aria-label="Menu aksi">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('about') }}">
                                            <i class="bi bi-eye me-2 text-info"></i> Lihat
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('about.edit', $about->id) }}">
                                            <i class="bi bi-pencil-square me-2 text-warning"></i> Edit
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <!-- End Table with stripped rows -->
        </div>
    </div>

</section>
@endsection