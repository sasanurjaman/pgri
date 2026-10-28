@extends('layouts.admin.admin')
@section('title', 'Galleri')
@section('content')
<div class="pagetitle">
    <h1>Galleri</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('gallery.index') }}">Galleri</a></li>
            <li class="breadcrumb-item active">Tambah</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Tambah Galleri</h5>
            
            <div class="mb-3">
                <label class="form-label">Gambar</label>
                <form action="{{ route('gallery.store') }}" class="dropzone" id="galleryDropzone">
                    @csrf
                    <div class="dz-message">
                        Drag &amp; drop gambar di sini, atau klik untuk memilih
                    </div>
                </form>
                <div class="form-text">Setiap gambar punya kolom nama sendiri. Isi sebelum klik Upload.</div>
            </div>
            
            <button type="button" id="btn-upload" class="btn btn-primary">
                <i class="bi bi-upload"></i> Upload
            </button>
            <a href="{{ route('gallery.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</section>

<!-- Dropzone v6 via CDN -->
<link rel="stylesheet" href="https://unpkg.com/dropzone@6.0.0-beta.2/dist/dropzone.css">
<script src="https://unpkg.com/dropzone@6.0.0-beta.2/dist/dropzone-min.js"></script>

<script>
    Dropzone.autoDiscover = false;

    const btnUpload = document.getElementById('btn-upload');

    const dz = new Dropzone('#galleryDropzone', {
        url: "{{ route('gallery.store') }}",
        paramName: 'gallery_image',
        maxFilesize: 10,
        acceptedFiles: '.jpg,.jpeg,.png,.webp',
        addRemoveLinks: true,
        autoProcessQueue: false,
        parallelUploads: 5,
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}',
            'Accept': 'application/json',
        },
    });

    // Tambahkan input nama di setiap preview gambar
    dz.on('addedfile', (file) => {
        const input = document.createElement('input');
        input.type = 'text';
        input.className = 'form-control form-control-sm mt-2';
        input.placeholder = 'Nama galeri';
        input.value = file.name.replace(/\.[^/.]+$/, ''); // default: nama file tanpa ekstensi

        // supaya klik di input tidak membuka dialog pilih file
        ['click', 'mousedown'].forEach(evt =>
            input.addEventListener(evt, e => e.stopPropagation())
        );

        file.previewElement.appendChild(input);
        file.nameInput = input;
    });

    // Kirim nama milik file tersebut
    dz.on('sending', (file, xhr, formData) => {
        formData.append('gallery_name', file.nameInput.value.trim());
    });

    // Tampilkan error validasi dari Laravel
    dz.on('error', (file, response) => {
        const msg = response?.errors?.gallery_image?.[0]
                 || response?.errors?.gallery_name?.[0]
                 || response?.message
                 || response;
        const el = file.previewElement.querySelector('[data-dz-errormessage]');
        if (el) el.textContent = msg;
        btnUpload.disabled = false;
    });

    dz.on('queuecomplete', () => {
        const failed = dz.getFilesWithStatus(Dropzone.ERROR).length;
        if (failed === 0 && dz.getFilesWithStatus(Dropzone.SUCCESS).length > 0) {
            window.location.href = "{{ route('gallery.index') }}";
        }
    });

    btnUpload.addEventListener('click', () => {
        const files = dz.getQueuedFiles();

        if (files.length === 0) {
            alert('Pilih minimal satu gambar.');
            return;
        }

        // Validasi: semua nama harus terisi
        let valid = true;
        files.forEach(file => {
            const empty = !file.nameInput.value.trim();
            file.nameInput.classList.toggle('is-invalid', empty);
            if (empty) valid = false;
        });

        if (!valid) return;

        btnUpload.disabled = true;
        dz.processQueue();
    });
</script>

@endsection