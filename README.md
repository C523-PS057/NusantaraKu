# NusantaraKu
Project Capstone oleh Tim C523-PS057 untuk program Studi Independen Bersertfikat Batch 5 di Dicoding Indonesia.

![Slide 1](https://github.com/C523-PS057/NusantaraKu/assets/44093021/fe24f90a-6be6-46de-b66a-7ac7514eb504)


## Apa itu NusantaraKu?
NusantaraKu adalah sebuah platform online yang bertujuan untuk memperkenalkan dan mempromosikan ragam budaya dari berbagai daerah di Indonesia, yang dikenal sebagai Nusantara. Website ini menyajikan informasi terkait budaya yang ada di indonesia seperti Tari Tradisional, Rumah Adat, Masakan khas dan kategori budaya lainnya. Tujuannya adalah untuk mengedukasi dan menginspirasi masyarakat mengenai kekayaan budaya Nusantara. <br/><br/>
Pengguna dapat dengan mudah melakukan pencarian dan filter terhadap budaya yang ingin dicari, selain itu pengguna dapat memberikan kritik dan masukan dalam bentuk komentar terkait informasi budaya yang disajikan dan Admin dapat mengelola seluruh informasi seperti menambahkan, mengubah, dan menghapus data budaya.

## Cara Menjalankan Aplikasi
**Sebelum memulai, pastikan sistem Anda telah memenuhi persyaratan berikut:**
- PHP (versi 8.2 atau yang lebih baru)
- Composer
- Node.js
- MySQL Server (bisa menggunakan XAMPP/Laragon)
- Apache Web Server (bisa menggunakan XAMPP/Laragon)
- Git

**Langkah-langkah untuk menjalankan aplikasi:**
- Clone Repository pada terminal menggunakan perintah berikut:     
``` git clone https://github.com/C523-PS057/NusantaraKu.git ```
- Masuk ke direktori yang dibuat oleh perintah sebelumnya   
``` cd NusantaraKu ```
- Install package composer yang diperlukan      
``` composer install ```
- Download File Konfigurasi .env dari link berikut, salin ke folder project (File terpisah karena alasan keamanan)          
[**Download File .env**](https://drive.google.com/file/d/1QljyieY6yKRHBke8rEbu-Xop4oO5YqA3/view).
- Generate Kunci Aplikasi     
``` php artisan key:generate ```
- Buat database MySQL baru dengan nama *“nusantaraku”* (sesuai dengan .env)        
- Jalankan perintah migrasi database         
``` php artisan migrate ```
- Jalankan perintah seeder database     
``` php artisan db:seed ```
- Install package nodejs yang diperlukan     
``` npm install ```
- Jalankan NodeJS (hanya perlu 1x saja)     
``` npm run dev ```
- Jalankan server website      
``` php artisan serve ```
- Sekarang web bisa diakses melalui http://localhost:8000      

Kami telah menyediakan 2 akun demo dengan kredensial sebagai berikut:

- **Akun Role User:**    
Email: user@testing.com     
Password: 12345678

- **Akun Role Admin:**     
Email: admin@testing.com     
Password: admin1234


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
