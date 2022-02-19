<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>


## Learning Laravel

Membuat Create Read Update & Delete

Koneksi ke storage
```
php artisan storage:link
```

Bisa di buat untuk menjalankan Models Database 
```
php artisan tinker
```

Blade Escape Character 
Agar tag html dalam text bisa dijalankan
{!! variabel !!}


install clockwork laravel 
fitur yang digunakan untuk melihat query database yang berjalan di website yang kita buat

```
composer require itsgoingd/clockwork
```
kemudian install extension clockwork di chrome


Function diffForHumans di laravel merupakan fungsi untuk menghitung perbedaan waktu yang di database dengan waktu sekarang 
milik library carbon

contoh
```
created_at->diffForHumans()
```

fungsi method skip(1) digunakan untuk melewatkan postingan pertama atau posts[0]

```
$..->skip() as $..
```

Mengubah halaman default Route dari Home.

-App\Providers\RouteService\Provider.php 


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
