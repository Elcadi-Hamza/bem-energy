<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



## instructions for inisialization
1- install composer [click ici](https://getcomposer.org/).

2-clone the code : 


```bash
git clone https://github.com/Elcadi-Hamza/bem-energy.git

composer install

cp .env.example .env

php artisan key:generate

npm install

```
3-change the info on .env
```php
DB_DATABASE=bemEnergy // changer le nom de la base donne 
DB_USERNAME=root  // changer le nem d'utilsateur
DB_PASSWORD=0000 // changer le mot de pass
```
4-creer la base de donner:

lancer xamp

``` bash
php artisan migrate
php artisan serve
```
si tu vois des error contacter moi

5-lancer server 
``` bash
npm install 
npm run dev
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
