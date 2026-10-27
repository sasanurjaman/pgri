@extends('layouts.admin.admin')
@section('title', 'Agenda')
@section('content')
<div class="pagetitle">
    <h1>Agenda</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('schedule.index') }}">Agenda</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Edit Agenda</h5>

            <form method="POST" action="{{ route('schedule.update', $schedule->id) }}" class="row g-3 needs-validation"
                novalidate>

                @csrf
                @method('PUT')

                {{-- Nama Agenda --}}
                <div class="col-md-6">
                    <label for="schedule_name" class="form-label">Nama Agenda</label>

                    <input name="schedule_name" type="text"
                        class="form-control @error('schedule_name') is-invalid @enderror" id="schedule_name"
                        value="{{ old('schedule_name', $schedule->schedule_name) }}" maxlength="255" required>

                    <div class="invalid-feedback">
                        Isi nama agenda.
                    </div>

                    @error('schedule_name')
                    <div class="text-danger small">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Tanggal --}}
                <div class="col-md-6">
                    <label for="schedule_date" class="form-label">Tanggal</label>

                    <input name="schedule_date" type="date"
                        class="form-control @error('schedule_date') is-invalid @enderror" id="schedule_date"
                        value="{{ old('schedule_date', $schedule->schedule_date) }}" required>

                    <div class="invalid-feedback">
                        Pilih tanggal agenda.
                    </div>

                    @error('schedule_date')
                    <div class="text-danger small">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                {{-- Deskripsi --}}
                <div class="col-12 mt-3">
                    <label for="schedule_description_editor" class="form-label">
                        Deskripsi Agenda
                    </label>

                    <input id="schedule_description" type="hidden" name="schedule_description"
                        value="{{ old('schedule_description', $schedule->schedule_description) }}">

                    <trix-editor input="schedule_description" id="schedule_description_editor"
                        class="@error('schedule_description') border border-danger rounded @enderror">
                    </trix-editor>

                    <div id="description-feedback" class="text-danger small mt-1">
                        @error('schedule_description')
                        {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">
                        Simpan
                    </button>
                </div>

            </form><!-- End Custom Styled Validation -->
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('.needs-validation');

    if (!form) return;

    const description = document.getElementById('schedule_description');
    const editor = document.getElementById('schedule_description_editor');
    const feedback = document.getElementById('description-feedback');

    form.addEventListener('submit', function (event) {
        // Validasi deskripsi Trix Editor
        const content = editor.editor.getDocument().toString().trim();

        if (!content) {
            event.preventDefault();
            event.stopPropagation();

            editor.classList.add('border', 'border-danger', 'rounded');
            feedback.textContent = 'Deskripsi agenda wajib diisi.';
        } else {
            editor.classList.remove('border', 'border-danger');
            feedback.textContent = '';
        }

        // Validasi input HTML dan Bootstrap
        if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
        }

        form.classList.add('was-validated');
    });

    // Hilangkan pesan error ketika deskripsi mulai diisi
    editor.addEventListener('trix-change', function () {
        const content = editor.editor.getDocument().toString().trim();

        if (content) {
            editor.classList.remove('border', 'border-danger');
            feedback.textContent = '';
        }
    });
});
</script>

@endsection