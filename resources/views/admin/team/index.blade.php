@extends('layouts.admin.admin')
@section('title', 'Kepengurusan')
@section('content')
<div class="pagetitle">
    <h1>Kepengurusan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Kepengurusan</li>
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
            <a class="btn btn-sm btn-primary mb-3 float-end" href="{{ route('team.create') }}">
                <i class="bi bi-plus-circle me-2"></i> Tambah Team
            </a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($teams as $team)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            @if ($team->team_image)
                            <img src="{{ asset('storage/' . $team->team_image)}}" alt="{{ $team->team_name }}"
                                class="img-fluid" width="50">
                            @else
                            <img src="/assets/img/noimage.jpeg" alt="{{ $team->team_name }}" class="img-fluid"
                                width="50">
                            @endif
                        </td>
                        <td>{{ $team->team_name}}</td>
                        <td>{{ $team->team_position }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-light btn-sm border-0" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" aria-label="Menu aksi">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>

                                <ul class="dropdown-menu dropdown-menu-end shadow-sm">
                                    <li>
                                        <a class="dropdown-item" href="{{ route('team') }}">
                                            <i class="bi bi-eye me-2 text-info"></i> Lihat
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('team.edit', $team->id) }}">
                                            <i class="bi bi-pencil-square me-2 text-warning"></i> Edit
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{ route('team.destroy', $team->id) }}" method="POST"
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