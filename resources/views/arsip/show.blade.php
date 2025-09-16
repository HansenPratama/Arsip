{{-- resources/views/arsip/show.blade.php --}}
@extends('layouts.app')

@section('content')

        {{-- Main Content --}}
        <div class="col-md-10 p-4">
            <h4>Arsip Surat >> Lihat</h4>

            {{-- Info Surat --}}
            <p><strong>Nomor:</strong> 
                {{ $arsip->nomor_surat ?: '2022/PD3/TU/00'.$arsip->id_arsip }}
            </p>
            <p><strong>Kategori:</strong> {{ $arsip->kategori->nama_kategori ?? '-' }}</p>
            <p><strong>Judul:</strong> {{ $arsip->judul }}</p>
            <p><strong>Waktu Unggah:</strong> 
                {{ $arsip->tanggal_upload ? \Carbon\Carbon::parse($arsip->tanggal_upload)->format('d M Y H:i') : '-' }}
            </p>


            {{-- Preview PDF --}}
            <div class="border my-3" style="height:500px;">
                <iframe src="{{ asset('uploads/'.$arsip->file_pdf) }}" 
                        width="100%" height="100%"></iframe>
            </div>

            {{-- Tombol Navigasi --}}
            <div class="d-flex gap-2">
                <a href="{{ route('arsip.index') }}" class="btn btn-secondary"><< Kembali</a>

                <a href="{{ asset('uploads/'.$arsip->file_pdf) }}" 
                   download="{{ $arsip->judul }}.pdf"
                   class="btn btn-warning">Unduh</a>

                <a href="{{ route('arsip.edit',$arsip->id_arsip) }}" 
                    class="btn btn-primary">Edit/Ganti File</a>
            </div>
        </div>
    </div>
</div>
@endsection