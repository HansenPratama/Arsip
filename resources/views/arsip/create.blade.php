@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Arsip Surat >> Unggah</h3>
    <p>Unggah surat yang telah terbit pada form ini untuk diarsipkan.<br>
       Catatan: <br>
       - Gunakan file berformat PDF
    </p>

    {{-- tampilkan error validasi --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('arsip.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- nomor surat --}}
        <div class="mb-3">
            <label for="nomor_surat" class="form-label">Nomor Surat</label>
            <input type="text" name="nomor_surat" id="nomor_surat"
                   class="form-control" value="{{ old('nomor_surat') }}">
        </div>

        {{-- Kategori --}}
        <div class="col-md-6 mb-3">
            <label for="id_kategori" class="form-label">
                <i class="bi bi-tag text-primary me-1"></i>
                Kategori
            </label>
            <select name="id_kategori" id="id_kategori" class="form-select">
                <option value="">-- Pilih Kategori --</option>
                @foreach($kategori as $kat)
                    <option value="{{ $kat->id_kategori }}" 
                        {{ (old('id_kategori') ?? ($arsip->id_kategori ?? '')) == $kat->id_kategori ? 'selected' : '' }}>
                        {{ $kat->nama_kategori }}
                    </option>
                @endforeach
            </select>
        </div>

        {{-- judul --}}
        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul"
                   class="form-control" value="{{ old('judul') }}">
        </div>

        {{-- file pdf --}}
        <div class="mb-3">
            <label for="file_pdf" class="form-label">File Surat (PDF)</label>
            <input type="file" name="file_pdf" id="file_pdf"
                   class="form-control" accept="application/pdf">
        </div>

        <div class="d-flex gap-2">
            <a href="{{ route('arsip.index') }}" class="btn btn-secondary"><< Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
@endsection
