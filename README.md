# Laravel Multi Role

- Laravel Jetstream
- Livewire
- Tailwindcss

## How To Run

- Download semua dependencies `composer update `
- Settings Environment, on windows `copy .env.example .env` and on linux `cp .env.example .env`
- Generate enkripsi key app `php artisan key:generate`
- Create new database `CREATE DATABASE nama_database`
- Settings environment database **db_database**, **user**, **password**
  ```env
  // jika profile tidak muncul ganti APP_URL menjadi
  APP_URL=http://127.0.0.1:8000

  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=nama_databse
  DB_USERNAME=root
  DB_PASSWORD=
  ```
- Migrate `php artisan migrate`
- Active Storage lin `php artisan storage:link`
- Jalankan Seeder `php artisan db:seed`
- Finally `php artisan serve`
- Login apliaction
  ```txt
  Login as admin
  email : admin@gmail.com
  password : Admin123
  
  Login as user
  email : user@gmail.com
  password : Admin123
  ```
  > Note: untuk mengganti data user, sebelum menjalankan **seed** ganti data pada `database/seeders/UserSeeder.php` ganti sesuai kebutuhan jika ada tambahan costum role, edit default role pada migration users, dan modifikasi **HomeController** untuk role baru pada if...else


