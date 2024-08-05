# storease. 🤩

## Teknologi yang digunakan 🛠️

| Laravel 10                                                                       | PHP 8.1.28                                                                      | MySQL                                                                             | TailwindCSS                                                                        |
| :------------------------------------------------------------------------------- | :------------------------------------------------------------------------------ | :-------------------------------------------------------------------------------- | :--------------------------------------------------------------------------------- |
| <img src="https://avatars.githubusercontent.com/u/958072?s=200&v=4" width="150"> | <img src="https://avatars.githubusercontent.com/u/25158?s=200&v=4" width="150"> | <img src="https://avatars.githubusercontent.com/u/2452804?s=200&v=4" width="150"> | <img src="https://avatars.githubusercontent.com/u/67109815?s=200&v=4" width="150"> |

## Installation 🗳

Clone repo github ini

```bash
git clone https://github.com/altamisatmaja/storease-laravel.git
```

Masuk ke folder project

```bash
cd storease-laravel
```

Install dependencies

```bash
composer i && npm i
```

Copy .env.example menjadi .env

```bash
cp .env.example .env
```

Sesuaikan database environment,
contoh

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<nama_database>
DB_USERNAME=<username>
DB_PASSWORD=<password jika ada>
```

Tambahkan key di .env

```bash
API_URL = http://127.0.0.1:8000
atau
API_URL = <YOUR_BASE_URL>
```

Buka terminal dan jalankan

```bash
php artisan key:generate && php artisan migrate:fresh --seed
```

Jalankan sistem

```bash
php artisan serve
```
