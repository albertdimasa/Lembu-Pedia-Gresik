# Lembu Pedia Gresik

Website e-commerce sederhana dengan integrasi
menggunakan whatsapp. Memiliki 4 halaman utama
dan dashboard admin. Dibangun dengan framework
laravel dan bootstrap.

## Daftar Isi

-   [Screenshots](#screenshots)
-   [Cara Install](#install)
-   [Fitur Website](#fitur-website)
-   [Feedback](#feedback)

## Screenshots

![App Screenshot](https://i.ibb.co/2Fc5GTV/Dashboard.png)

![App Screenshot](https://i.ibb.co/3hMndWz/Admin.png)

## Fitur Website

-   [Admin Dashboard](#login-admin)
-   Halaman: Home, About, Contact, Shop
-   [Pemesanan Terintegrasi ke whatsapp](#Integrasi-whatsapp)

## Cara Install

1. Clone Project

```bash
  git clone https://github.com/albertdimasa/sapi-app.git
```

2. Install Composer (pastikan sudah install composer)

```bash
  composer install
  composer update
```

3. Buat Database dan sesuaikan namanya dengan di file .env

```bash
  php artisan migrate
  php artisan db:seed
```

## Login Admin

**Username:** Admin

**Password:** admin123

## Integrasi Whatsapp

1. Buka file send.php yang ada di folder public
2. Ganti nomor tersebut dengan nomor yang diinginkan

```bash
	$no_wa = '6285745974148';
```

## Feedback

Jika punya pertanyaan silahkan hubungi albertabraham28@gmail.com
