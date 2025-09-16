# Aplikasi Arsip Surat

## Tujuan
Aplikasi ini dirancang untuk mempermudah pengelolaan surat masuk maupun surat keluar.  
Fungsinya meliputi penyimpanan, pencarian, pengarsipan, hingga pengunduhan file surat dalam format **PDF**.

---

## Fitur

### Manajemen Arsip
- **Pencarian Surat**  
  Cari surat berdasarkan judul melalui search bar.
- **Tambah Surat**  
  Menambahkan surat baru dengan kategori (`Undangan`, `Pengumuman`, `Nota Dinas`, `Pemberitahuan`) dan unggah file PDF.
- **Edit Surat**  
  Mengubah data surat beserta kategori dan file PDF.
- **Hapus Surat**  
  Menghapus data surat dengan konfirmasi peringatan.
- **Unduh Surat**  
  Mengunduh surat dalam format PDF ke perangkat pengguna.
- **Detail Surat**  
  Menampilkan detail surat lengkap dengan file PDF.

### Manajemen Kategori Surat
- **Tambah / Edit / Hapus Kategori Surat**  
  Menambah, memperbarui, dan menghapus kategori surat dengan ID otomatis.
- **Halaman About**  
  Berisi informasi berupa foto, nama, NIM, dan tanggal pembuatan aplikasi.

---

## Cara Menjalankan

1. Clone repository:
   ```bash
   git clone https://github.com/HansenPratama/Arsip.git
2. Masuk ke direktori proyek:
   ```bash
   cd arsip

4. Instal dependensi Laravel:
   ```bash
   composer install

6. Salin file .env.example lalu ubah namanya menjadi .env:
   cp .env.example .env

7. Generate application key:
   php artisan key:generate

8. Buat symlink untuk file statis:
   php artisan storage:link

9. Jalankan migrasi database:
   php artisan migrate

10. Jalankan aplikasi:
   php artisan serve

11. Dokumentasi<br>
--Halaman Arsip--<br>
Dashboard

Tambah Arsip

Edit Arsip

Hapus Arsip

Detail Arsip

--Halaman Kategori Arsip--
Dashboard Kategori


Tambah Kategori


Edit Kategori


Hapus Kategori


--Halaman About--
About
