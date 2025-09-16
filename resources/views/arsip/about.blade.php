{{-- resources/views/arsip/about.blade.php --}}
@extends('layouts.app')

@section('title', 'Tentang Sistem')

@section('content')
<div class="row">

    {{-- Main Content --}}
    <div class="col-md-11">
        <div class="main-content">
            <div class="page-header">
                <h1 class="page-title"><i class="bi bi-info-circle"></i> About</h1>
                <p class="page-subtitle">Informasi tentang aplikasi ini</p>
            </div>
            
            <div class="d-flex align-items-start gap-4">
                <img src="{{ asset('images/foto.jpg') }}" alt="Foto Profil" 
                     class="rounded shadow" width="120">
                <div>
                    <p><strong>Nama&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong> Hansen Ari Pratama</p>
                    <p><strong>Prodi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong> D3 Manajemen Informatika Polinema PSDKU Kediri</p>
                    <p><strong>NIM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong> 2331730035</p>
                    <p><strong>Tanggal&nbsp;&nbsp;:</strong> 4 September 2025</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
