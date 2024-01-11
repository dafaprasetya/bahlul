# WEBSITE KATALOG

## Cara Menjalankan

1. **Download dan Ekstrak Repository**
   - Clone repository ini atau download dan ekstrak arsip zip.

2. **Import Database**
   - Buka phpmyadmin lalu buat database bernama "company".
   - Klik database company lalu klik import.
   - Arahkan ke folder "databasesql" lalu pilih "company.sql".

4. **Persiapkan Lingkungan Pembangunan**
   - Buka terminal (cmd) di direktori repository.
   - Jalankan perintah composer untuk mengupdate dependencies:
     ```bash
     composer update
     ```
   - Jalankan perintah npm untuk menginstall dependencies dan build assets:
     ```bash
     npm install && npm run dev
     ```

5. **Jalankan Aplikasi**
   - Gunakan perintah berikut untuk menjalankan server lokal:
     ```bash
     php artisan serve
     ```

6. **Buka Browser**
   - Buka browser dan akses [http://localhost:8000](http://localhost:8000)

## Catatan
- Pastikan PHP versi 7 ke atas sudah terinstal.
- Jika Anda belum memiliki Composer, download di [Composer Download](https://getcomposer.org/download/).
- Jika Anda belum memiliki Node.js dan npm, download di [Node.js Download](https://nodejs.org/).

Selamat menjalankan aplikasi!
