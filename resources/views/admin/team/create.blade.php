@extends('layouts.admin.admin')
@section('title', 'Kepengurusan')
@section('content')
<div class="pagetitle">
    <h1>Kepengurusan</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('team.index') }}">Kepengurusan</a></li>
            <li class="breadcrumb-item active">Tambah</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Kepengurusan</h5>

            <form method="POST" action="{{ route('team.store') }}" class="row g-3 needs-validation" novalidate
                enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <label for="team_name" class="form-label">Nama</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control @error('team_name') is-invalid @enderror" id="team_name"
                            name="team_name" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            isi nama
                        </div>
                        @error('team_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <label for="team_position" class="form-label">Jabatan</label>
                    <div class="input-group has-validation">
                        <input type="text" class="form-control @error('team_position') is-invalid @enderror"
                            id="team_position" name="team_position" aria-describedby="inputGroupPrepend" required>
                        <div class="invalid-feedback">
                            isi Jabatan
                        </div>
                        @error('team_position')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <label for="team_image" class="form-label">Unggah Foto</label>
                    <div class="input-group has-validation">
                        <input type="file" accept="image/*" class="form-control" id="team_image" name="team_image"
                            aria-describedby="inputGroupPrepend">
                    </div>
                </div>

                <div class="col-6">
                    <div class="border rounded p-3 text-center">
                        <img src="/assets/img/noimage.jpeg" alt="Preview foto" class="img-fluid rounded"
                            id="image-preview" style="max-height: 150px; object-fit: contain;">

                        <p class="text-muted small mt-2 mb-0" id="preview-text">
                            Foto yang dipilih akan ditampilkan di sini.
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form><!-- End Custom Styled Validation -->
        </div>
    </div>

</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const imageInput = document.getElementById('team_image');
        const imagePreview = document.getElementById('image-preview');
        const previewText = document.getElementById('preview-text');

        let previewUrl = null;

        imageInput.addEventListener('change', function () {
            const file = this.files[0];

            if (previewUrl) {
                URL.revokeObjectURL(previewUrl);
                previewUrl = null;
            }

            if (!file) {
                imagePreview.src = '/assets/img/noimage.jpeg';
                previewText.textContent = 'Foto yang dipilih akan ditampilkan di sini.';
                return;
            }

            if (!file.type.startsWith('image/')) {
                this.value = '';
                imagePreview.src = '/assets/img/noimage.jpeg';
                previewText.textContent = 'File harus berupa gambar.';
                return;
            }

            previewUrl = URL.createObjectURL(file);
            imagePreview.src = previewUrl;
            previewText.textContent = file.name;
        });
    });
</script>
@endsection