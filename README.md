# NusantaraKu
Project Capstone oleh Tim C523-PS057 untuk program Studi Independen Bersertfikat Batch 5 di Dicoding Indonesia.

![ss](https://github.com/C523-PS057/NusantaraKu/assets/44093021/7e89b801-e5b8-4f2c-929c-623e9db2748d)


## Apa itu NusantaraKu?
NusantaraKu adalah sebuah platform online yang bertujuan untuk memperkenalkan dan mempromosikan ragam budaya dari berbagai daerah di Indonesia, yang dikenal sebagai Nusantara. Website ini menyajikan informasi terkait budaya yang ada di indonesia seperti Tari Tradisional, Rumah Adat, Masakan khas dan kategori budaya lainnya. Tujuannya adalah untuk mengedukasi dan menginspirasi masyarakat mengenai kekayaan budaya Nusantara. <br/><br/>
Pengguna dapat dengan mudah melakukan pencarian dan filter terhadap budaya yang ingin dicari, selain itu pengguna dapat memberikan kritik dan masukan dalam bentuk komentar terkait informasi budaya yang disajikan dan Admin dapat mengelola seluruh informasi seperti menambahkan, mengubah, dan menghapus data budaya.

## Cara Menjalankan Aplikasi
*Sebelum memulai, pastikan sistem Anda telah memenuhi persyaratan berikut:*
- PHP (versi 8.2 atau yang lebih baru)
- Composer
- Node.js
- MySQL Server (bisa menggunakan XAMPP/Laragon)
- Apache Web Server (bisa menggunakan XAMPP/Laragon)
- Git

*Langkah-langkah untuk menjalankan aplikasi:*
- Clone Repository pada terminal menggunakan perintah berikut: <br/>
``` git clone https://github.com/C523-PS057/NusantaraKu.git ```
- Masuk ke direktori yang dibuat oleh perintah sebelumnya <br/>
``` cd NusantaraKu ```
- Install package composer yang diperlukan <br/>
``` composer install ```
- Download File Konfigurasi .env dari link berikut, salin ke folder project <br/>
``` https://safksaofaksasf ```
- Generate Kunci Aplikasi <br/>
``` php artisan key:generate ```
- Buat database MySQL baru dengan nama *“nusantaraku”* (sesuai dengan .env) <br/>
- Jalankan perintah migrasi database <br/>
``` php artisan migrate ```
- Jalankan perintah seeder database <br/>
``` php artisan db:seed ```
- Install package nodejs yang diperlukan <br/>
``` npm install ```
- Jalankan NodeJS (hanya perlu 1x saja) <br/>
``` npm run dev ```
- Jalankan server website <br/>
``` php artisan serve ```
- Sekarang web bisa diakses melalui http://localhost:8000 <br/>

## Kontributor
- **Agrey Tosira** (UI/UX Designer & Front-End Web Developer)
- **Muhamad Zahran Yudha** (Back-End Developer)
- **Faris Ghina Purohita** (DevOps Engineer)

## Teknologi yang digunakan
- HTML
- CSS
- SCSS
- JavaScript
- Bootstrap v5.2 (Framework Front-End)
- PHP
- Laravel
- Vite
- MySQL
- Laravel v10.x (Framework Back-End)
