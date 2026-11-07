# Web Programming 1 - CRUD Media Mahasiswa & Modular Foldering

Proyek integrasi struktur folder modular (foldering), CRUD Mahasiswa, serta modul lanjutan **CRUD Media (Foto, Audio, Dokumen PDF)** lengkap dengan autentikasi session, validasi file upload server-side & client-side (DOM preview), serta penghapusan media fisik secara aman.

## 📁 Struktur Folder Project

```text
afteruts/
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── images/
│   │   ├── foto.jpg
│   │   └── profile.jpg
│   └── js/
│       ├── crud.js           (Fitur Sesi 9)
│       └── media.js          (Live Preview & validasi client-side Sesi 10)
├── config/
│   ├── auth.php              (Session guard)
│   ├── koneksi.php           (Koneksi database MySQLi)
│   └── media_helper.php      (Helper upload & hapus media fisik)
├── database/
│   ├── database.sql          (Skema & backup tabel mahasiswa + users)
│   └── upgrade_step3.sql     (Kueri ALTER TABLE kolom media)
├── pages/
│   ├── dashboard.php
│   ├── data_mahasiswa.php
│   ├── form_mahasiswa.php
│   ├── index.php             (Biodata Mahasiswa)
│   ├── layout.php
│   └── login.php
├── crud/                     (CRUD Mahasiswa teks biasa)
│   ├── index.php
│   ├── tambah.php
│   └── edit.php
├── crud-media/               (CRUD Mahasiswa dengan Media)
│   ├── index.php             (Tabel media + live search)
│   ├── tambah.php            (Form tambah dengan DOM preview)
│   └── edit.php              (Form edit media opsional)
├── proses/
│   ├── crud-media/
│   │   ├── tambah.php        (Backend simpan & upload media)
│   │   ├── update.php        (Backend update media & hapus media lama)
│   │   └── hapus.php         (Backend hapus data & unlink file media)
│   ├── buat_user.php
│   ├── logout.php
│   ├── proses_login.php
│   ├── proses_crud_tambah.php
│   ├── proses_update.php
│   └── proses_hapus.php
├── uploads/
│   ├── images/               (Penyimpanan file foto)
│   ├── audio/                (Penyimpanan file audio)
│   └── documents/            (Penyimpanan file dokumen PDF)
├── .htaccess
├── index.php                 (Redirect otomatis)
└── README.md
```

## 🚀 Fitur Utama
1. **CRUD Media Terintegrasi**:
   - **Upload Foto**: Validasi JPG, PNG, WEBP, maks 2 MB, dengan live preview langsung via JavaScript URL object.
   - **Upload Audio**: Validasi MP3, WAV, maks 2 MB, dengan live preview pemutar audio interaktif.
   - **Upload Dokumen**: Validasi PDF, maks 2 MB, dengan preview ukuran (KB) dan tautan baca PDF.
2. **Pembersihan File Fisik (*Clean Storage*)**:
   - Menghapus media lama saat user memperbarui foto/audio/dokumen.
   - Menghapus seluruh file fisik di disk saat record mahasiswa dihapus (*mencegah orphan files*).
   - Rollback file upload jika query database gagal.
3. **Pencarian Real-Time (`assets/js/media.js`)**: Filter instan pada baris tabel media.
4. **Keamanan**: Autentikasi session login, password hash, dan MySQLi prepared statements.

## ⚙️ Persyaratan
- PHP 8.x
- MySQL 8.x
- Web Server (Apache via Laragon / XAMPP atau PHP Built-in Server)
- Database: `web_programming_1`
