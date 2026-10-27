@extends('layouts.admin.admin')
@section('title', 'Berita')
@section('content')
<div class="pagetitle">
    <h1>Kepengurusan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item active">Berita</li>
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
            <h5 class="card-title">Kepengurusan PGRI Cisurupan</h5>
            <a class="btn btn-sm btn-primary mb-3 float-end" href="{{ route('blog.create') }}">
                <i class="bi bi-plus-circle me-2"></i> Tambah Berita
            </a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Deskipsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($blogs as $blog)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            @if ($blog->blog_image)
                            <img src="{{ asset('storage/' . $blog->blog_image)}}" alt="{{ $blog->blog_title }}"
                                class="img-fluid" width="50">
                            @else
                            <img src="/assets/img/noimage.jpeg" alt="{{ $blog->blog_title }}" class="img-fluid"
                                width="50">
                            @endif
                        </td>
                        <td>{{ $blog->blog_title}}</td>
                        <td>{{ Str::limit(strip_tags($blog->blog_description), 100, '...') }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-light btn-sm border-0" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" aria-label="Menu aksi">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('blog') }}">
                                            <i class="bi bi-eye me-2 text-info"></i> Lihat
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('blog.edit', $blog->id) }}">
                                            <i class="bi bi-pencil-square me-2 text-warning"></i> Edit
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{ route('blog.destroy', $blog->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item"
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                <i class="bi bi-trash me-2 text-danger"></i> Hapus
                                            </button>
                                        </form>
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