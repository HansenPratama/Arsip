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

## Dokumentasi
### Halaman Arsip
Dashboard
![Dashboard Arsip](https://drive.google.com/uc?export=view&id=1dLewHFys5JxBGYlb3m9u-BGuaqNXc-kv)

Tambah Arsip  
![Tambah Arsip](https://drive.google.com/uc?export=view&id=1HZ5nu_0DCfMKtJzDkE9Z-kNArv1xRjIn)

Edit Arsip  
![Edit Arsip](https://drive.google.com/uc?export=view&id=1ReFpOPAxe_9gHPzARLrl_IYm4zBAEjvE)

Hapus Arsip  
![Hapus Arsip](https://drive.google.com/uc?export=view&id=13Ze58VOR4en2DhPd2PfLPB5TJQ_FGv-M)

Detail Arsip  
![Detail Arsip](https://drive.google.com/uc?export=view&id=1RgX7q9FxZfzCSgt24qwr8EY1FWBau8F5)

---

### Halaman Kategori Arsip
Dashboard Kategori  
![Dashboard Kategori](https://drive.google.com/uc?export=view&id=1SU4zZUq9kgePRZjzaM4y18YfwHPclVoL)

Tambah Kategori  
![Tambah Kategori](https://drive.google.com/uc?export=view&id=1b9iiGxfbQj9eGS_Vkstr1vvDHraXPb7J)

Edit Kategori  
![Edit Kategori](https://drive.google.com/uc?export=view&id=1qei3dn5H9YZBM5Iy3lHgwVetCUUOKt-2)

Hapus Kategori  
![Hapus Kategori](https://drive.google.com/uc?export=view&id=17qdjCZ0jenMYAW85tD8gKBParrE4svpO)

---

### Halaman About
About  
![About](https://drive.google.com/uc?export=view&id=1mdeIy5HgjEeasaPmVkbkvA-gNC0_ovVb)
