@extends('layouts.admin.admin')
@section('title', 'Blog')
@section('content')
<div class="pagetitle">
    <h1>Berita</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('blog.index') }}">Berita</a></li>
            <li class="breadcrumb-item active">Edit Berita</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Berita</h5>
            <form method="POST" class="row g-3 needs-validation" novalidate enctype="multipart/form-data"
                action="{{ route('blog.update', $blog->id) }}">
                @csrf
                @method('PUT')

                {{-- blog_title --}}
                <div class="col-md-6">
                    <label for="blog_title" class="form-label">Judul</label>
                    <div class="input-group has-validation mb-3">
                        <input name="blog_title" type="text" value="{{ old('blog_title', $blog->blog_title) }}"
                            class="form-control @error('blog_title') is-invalid @enderror" id="blog_title"
                            aria-describedby="inputGroupPrepend" value="" required>
                        <div class="invalid-feedback">
                            Isi Judul
                        </div>
                        @error('blog_title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <input type="text" name="blog_slug" value="{{ $blog->blog_slug }}" hidden>

                    <label for="blog_image" class="form-label mt-3">Unggah Foto</label>
                    <div class="input-group has-validation">
                        <input type="file" accept="image/*" class="form-control" id="blog_image" name="blog_image"
                            aria-describedby="inputGroupPrepend">
                    </div>
                </div>

                <div class="col-6">
                    <div class="border rounded p-3 text-center">
                        @if ($blog->blog_image)
                        <img src="{{ asset('storage/' . $blog->blog_image) }}" alt="Preview foto"
                            class="img-fluid rounded" id="image-preview"
                            style="max-height: 150px; object-fit: contain;">
                        @else
                        <img src="/assets/img/noimage.jpeg" alt="Preview foto" class="img-fluid rounded"
                            id="image-preview" style="max-height: 150px; object-fit: contain;">
                        @endif

                        <p class="text-muted small mt-2 mb-0" id="preview-text">
                            Foto yang dipilih akan ditampilkan di sini.
                        </p>
                    </div>
                </div>

                {{-- blog_description --}}
                <div class="col-12 mt-3">
                    <label for="blog_description_editor" class="form-label">
                        Deskripsi
                    </label>

                    <input id="blog_description" type="hidden" name="blog_description"
                        value="{{ old('blog_description', $blog->blog_description) }}">

                    <trix-editor input="blog_description" id="blog_description_editor">
                    </trix-editor>

                    @error('blog_description')
                    <div class="text-danger small mt-1">
                        {{ $message }}
                    </div>
                    @enderror

                    <div id="description-feedback" class="text-danger small mt-1"></div>
                </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
        </form><!-- End Custom Styled Validation -->
    </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const imageInput = document.getElementById('blog_image');
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

    document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.needs-validation');
    
    if (!form) return;
    
    const description = document.getElementById('blog_description');
    const editor = document.getElementById('blog_description_editor');
    const feedback = document.getElementById('description-feedback');
    
    // Validasi saat form dikirim
    form.addEventListener('submit', function (event) {
    const content = description.value
    .replace(/<[^>]*>/g, '')
        .replace(/&nbsp;/g, ' ')
        .trim();
    
        const descriptionEmpty = !content;
    
        if (descriptionEmpty) {
        event.preventDefault();
        event.stopPropagation();
    
        editor.classList.add('border', 'border-danger', 'rounded');
        feedback.textContent = 'Isi deskripsi.';
        } else {
        editor.classList.remove('border', 'border-danger');
        feedback.textContent = '';
        }
    
        if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
        }
    
        form.classList.add('was-validated');
        });
    
        // Sinkronisasi konten Trix ke input hidden
        if (editor && description) {
        editor.addEventListener('trix-change', function () {
        const content = description.value
        .replace(/<[^>]*>/g, '')
            .replace(/&nbsp;/g, ' ')
            .trim();
    
            if (content) {
            editor.classList.remove('border', 'border-danger');
            feedback.textContent = '';
            }
            });
            }
            });
</script>
@endsection