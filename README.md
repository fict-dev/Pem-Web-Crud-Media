# Web Programming 1 - Sesi 9 (CRUD Mahasiswa & Foldering)

Proyek integrasi struktur folder modular (foldering) dan modul CRUD (Create, Read, Update, Delete) Mahasiswa lengkap dengan autentikasi session dan antarmuka interaktif.

## 📁 Struktur Folder Project

```text
afteruts/ (sesi 9)
├── assets/
│   ├── css/
│   │   └── style.css
│   ├── images/
│   │   ├── foto.jpg
│   │   └── profile.jpg
│   └── js/
│       └── crud.js (Pencarian real-time & konfirmasi hapus)
├── config/
│   ├── auth.php (Session guard)
│   └── koneksi.php (Koneksi database MySQLi)
├── database/
│   └── database.sql (Backup tabel mahasiswa & users)
├── pages/
│   ├── dashboard.php
│   ├── data_mahasiswa.php
│   ├── form_mahasiswa.php (Modul 4B)
│   ├── index.php (Biodata)
│   ├── layout.php
│   └── login.php
├── crud/
│   ├── index.php (Tabel CRUD lengkap + search + action)
│   ├── tambah.php (Form tambah data mahasiswa)
│   └── edit.php (Form edit data mahasiswa)
├── proses/
│   ├── buat_user.php
│   ├── logout.php
│   ├── proses_login.php
│   ├── proses_tambah.php (Proses lama modul 4B)
│   ├── proses_crud_tambah.php (Proses tambah CRUD)
│   ├── proses_update.php (Proses update CRUD)
│   └── proses_hapus.php (Proses delete CRUD via POST)
├── .htaccess
├── index.php (Redirect otomatis)
└── README.md
```

## 🚀 Fitur Utama
1. **Foldering & Relative Path Modular**: Pemisahan berkas ke dalam direktori `assets/`, `config/`, `database/`, `pages/`, `crud/`, dan `proses/`.
2. **Navigasi Terintegrasi**: Navbar di setiap halaman `pages/` dan `crud/` saling terhubung dengan relative path yang tepat.
3. **Fitur CRUD Mahasiswa**:
   - **Read**: Menampilkan seluruh data mahasiswa dengan sorting ID terbaru (`ORDER BY id DESC`).
   - **Create**: Form penambahan data mahasiswa baru.
   - **Update**: Edit data mahasiswa dengan auto-fill data saat ini.
   - **Delete**: Hapus data aman menggunakan method POST dan prepared statement dilengkapi dialog konfirmasi.
4. **Pencarian Real-Time (`assets/js/crud.js`)**: Filter data mahasiswa secara langsung berdasarkan NIM, nama, program studi, atau email tanpa reload halaman.

## ⚙️ Persyaratan
- PHP 8.x
- MySQL 8.x
- Web Server (Apache via XAMPP / Laragon)
- Database: `web_programming_1` (tabel `mahasiswa` dan `users`)
