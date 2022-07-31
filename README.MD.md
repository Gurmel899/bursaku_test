Langkah-Langkah Dan Cara Instalasi Laravel 8 


-Untuk melakukan instalasi laravel pastikan anda telah instal composer kita
 akan melakukan intslasi dengan  composer

1.cd\ kemudian tekan tombol enter, perintah ini berguna untu kembali ke drive utama.
2.cd bursaku_test kemudian enter, perintah ini berguna untuk masuk kedalam folder bursaku_test

3.langkah awal adalah menginstal paket laravel sebelum membuat project baru, paket ini hanya dilakukan satu kali,
 perintah yang digunkan 

-composer create-project --prefer-dist laravel/laravel bursaku_test "8.*"

4.setelah selesai melakukan instalasi selanjutnya kita setting lokasi vendor\bin sesuai dengan 
  dokumentasi yang ada pada website laravel 

5.ntuk menjalankan project  yang sudah kita buat, caranya adalah anda harus masuk terlebih dahulu kedalam folder bursaku_test
dengan perintah cd bursaku_test kemudian jalankan perintah:

-php artisan serve

6.Copy alamat url : http://127.0.0.1:8000 untuk mengecek apakah laravel tersebut sudah berjalan


================================================================================================================

Langkah-Langkah Setiing Postgressql Pada Laravel 8
---------------------------------------------------


1. langkah pertama buka postgressql yang sudah kita instal  dengan membuka pg admin4 dikarenakan kita menggunkan version 14

2. klik server terus klik postgressql apabila dipassangakan password silahkan masukan password

3.klik kanan pada Database->Create->Database membuat nama database
disini saya mmebuat nama database saya dengan nama dbkendaraan di database saya

4.pilih file .env pada project laravel kita untuk mengubah settingan database
kita rubah file nya menjadi 


	DB_CONNECTION =pgsql
	DB_HOST = 127.0.0.1
	DB_PORT = 5234
	DB_DATABASE = dbkendaraan
	DB_USERNAME = postgres
	DB_PASSWORD = root

5. selesai
