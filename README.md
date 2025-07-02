# 🛍️ Aplikasi Toko Online — CodeIgniter 4

Aplikasi web sederhana berbasis **CodeIgniter 4** untuk mengelola toko online.  
Fitur lengkap: CRUD produk, diskon harian, keranjang, checkout dengan ongkir otomatis, manajemen pembelian admin, dan dashboard API.

---

## 🔧 Fitur

### Pengguna:

- 🔍 Lihat produk
- 🛒 Tambah ke keranjang
- ✏️ Edit/hapus isi keranjang
- 🚚 Checkout + ongkir otomatis (RajaOngkir)
- 🧾 Lihat status transaksi

### Admin:

- 🔐 Login admin
- 📦 CRUD Produk
- 🗂️ CRUD Kategori Produk
- 💸 CRUD Diskon Harian
- 📋 Manajemen Pembelian:
  - Lihat semua transaksi
  - Ubah status pembelian (0/1)
- 🌐 API transaksi untuk dashboard

---

## 🚀 Instalasi

### 1. Clone Project

git clone https://github.com/vendracakep/belajar-ci-tugas.git
cd belajar-ci-tugas

### 2. Setup Environtment

CI_ENVIRONMENT = development

database.default.hostname = localhost
database.default.database = db_ci4
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi

COST_KEY = "WTvTIeGlbecf829eefcb22b6WKk9oNRi"
API_KEY = "random123678abcghi"

### 3. Install Depedency

composer install

### 4. Setuo Database

a. Buat database: db_ci4

b. Import SQL jika ada (database/db_ci4.sql)

c. Atau CRUD data manual lewat web

### 5. Jalanin aja aplikasinya

php spark serve

```bash

```
