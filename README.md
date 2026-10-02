# Aplikasi Pengelolaan Data Peserta Sertifikasi

Aplikasi berbasis web ini dikembangkan menggunakan framework **Laravel** untuk mendukung proses pengelolaan data skema sertifikasi dan peserta uji kompetensi.

## Fitur Utama
1. **Autentikasi (Login & Logout)**: Keamanan akses halaman admin.
2. **Dashboard**: Ringkasan informasi data.
3. **Manajemen Skema (CRUD)**: Tambah, lihat, ubah, dan hapus data skema sertifikasi[cite: 1].
4. **Manajemen Peserta (CRUD & Relasi)**: Pengelolaan data peserta dengan relasi ke data skema, lengkap dengan fitur validasi input dan pencarian (search)[cite: 1].

## Prasyarat Sistem
* PHP >= 8.2[cite: 1]
* Composer[cite: 1]
* XAMPP (MySQL Database)[cite: 1]
* Web Browser[cite: 1]

## Cara Menjalankan Aplikasi
1. Pindahkan folder project ke dalam direktori `C:\xampp\htdocs\`.
2. Buka terminal/CMD, lalu arahkan ke folder project:
   ```bash
   cd C:\xampp\htdocs\SERTIFIKASI-APP-AGNES
# Instal dependensi PHP:
composer install
# Salin file konfigurasi environment:
copy .env.example .env

# Generate application key:
php artisan key:generate

# Sesuaikan konfigurasi database (DB_DATABASE, DB_USERNAME, DB_PASSWORD) pada file .env.

# Jalankan migrasi dan seeder database:
php artisan migrate --seed

# Jalankan server lokal Laravel:
php artisan serve

# Buka browser dan akses: http://127.0.0.1:8000

# Akun Administrator Default
Email: admin@sertifikasi.com
Password: 
