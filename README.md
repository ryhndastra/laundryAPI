# 🧺 LaundryAPI

LaundryAPI adalah backend RESTful API yang dibangun menggunakan **Laravel** dan berfungsi sebagai server-side aplikasi laundry berbasis Flutter. API ini menangani fitur seperti autentikasi pengguna, layanan laundry, pemesanan, dan status transaksi.

---

## 🚀 Fitur

- Autentikasi pengguna (Register & Login)
- CRUD layanan laundry
- Manajemen pemesanan (order)
- Update status pesanan (proses, selesai, diambil)
- Middleware otorisasi (token-based)
- JSON response standard dan validasi request
- RESTful endpoint siap dihubungkan ke Flutter

---

## 🧰 Teknologi

- Laravel 12+
- MySQL
- Laravel Eloquent ORM
- Laravel Migrations dan Seeders
- Laravel Sanctum

---

## 📦 Instalasi

1. Clone project
```bash
git clone https://github.com/username/laundryAPI.git
cd laundryAPI
```

2. Install dependensi
```bash
composer install
```

3. Copy file `.env` dan generate app key
```bash
cp .env.example .env
php artisan key:generate
```

---

## ⚙️ Konfigurasi Database

Edit file `.env` sesuai pengaturan MySQL lokal kamu:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laundry_db
DB_USERNAME=root
DB_PASSWORD=
```

Lalu jalankan migrasi dan seeder (jika sudah tersedia):
```bash
php artisan migrate --seed
```

---

## 🧪 Menjalankan API secara lokal

```bash
php artisan serve
```

API akan tersedia di:
```
http://127.0.0.1:8000
```

## 📌 Catatan

- Aktifkan CORS jika diakses dari aplikasi Flutter
- Gunakan Postman atau Insomnia untuk testing endpoint

---

## 🔗 Terkait

- 📱 Frontend (Flutter): *https://github.com/ryhndastra/bwa-laundry-frontend.git*
