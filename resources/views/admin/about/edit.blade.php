@extends('layouts.admin.admin')
@section('title', 'Tentang Edit')
@section('content')
<div class="pagetitle">
    <h1>Tentang</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('about.index') }}">Tentang</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Tentang</h5>
            <form method="POST" action="{{ route('about.update', $about->id )}}" class="row g-3 needs-validation"
                novalidate>
                @csrf
                @method('put')

                {{-- about_title --}}
                <div class="col-md-12">
                    <label for="about_title" class="form-label">Judul</label>
                    <div class="input-group has-validation">
                        <input name="about_title" type="text" class="form-control" id="about_title"
                            aria-describedby="inputGroupPrepend" value="{{ $about->about_title }}" required>
                        <div class="invalid-feedback">
                            Isi Judul.
                        </div>
                    </div>
                </div>
                {{-- about_description --}}
                <div class="col-12 mt-3">
                    <div class="input-group has-validation">
                        <input id="about_description" value="{{ $about->about_description }}" type="hidden"
                            name="about_description" aria-describedby="inputGroupPrepend" required>
                    </div>
                    <div class="invalid-feedback">
                        Isi Deskripsi.
                    </div>
                    <trix-editor input="about_description"></trix-editor>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form><!-- End Custom Styled Validation -->
        </div>
    </div>
</section>
@endsection