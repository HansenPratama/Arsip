@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Kategori Surat >> Tambah</h3>
    <p>Tambah kategori surat anda.
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

    <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Id Kategori (Auto Increment) --}}
        <div class="mb-3">
            <label for="id_kategori" class="form-label">ID (Auto Increment)</label>
            <input type="text" class="form-control" value="{{ $nextId }}" readonly>
        </div>

        {{-- Nama Kategori --}}
        <div class="mb-3">
            <label for="nama_kategori" class="form-label">Nama Kategori</label>
            <input type="text" name="nama_kategori" id="nama_kategori"
                   class="form-control" value="{{ old('nama_kategori') }}">
        </div>

        {{-- Deskripsi --}}
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" id="deskripsi"
                   class="form-control" value="{{ old('deskripsi') }}">
        </div>

        <div class="d-flex gap-2">
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary"><< Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
@endsection
