
# Hobby market pregeld prodaje

## O aplikaciji 

Aplikacija je Laravel projekt ko jo poskušaš zaganjat znotraj svoje vitrulake je potrebno narediti composer install. 
Ko narediš migracije so tabele prazne. 
preden poganjaš je potrebno datoteko .env-example kopirati in prilepiti z imenom .env znotraj določi ime baze database name 
preden bo delovalo je treba tudi pognati ukaz  php artisan key:generate da generira secret_key.

moji testni podatki iz tabel so v mapi podatki. 

**opozorilo** Alikacija je še vedno v razvoju!
## Struktura
1. za zavihek prodaja skrbi SallesController (app/http/Controllers/SalesController)
2 za zavihek prodajalci in podrobnosti prodajalcev skrbi Vendor controler (app/http/Controllers/VendorController)
3. za zavihek izdelki in njihove podrobnosti skrbi ProductsController (app/http/Controllers/ProductsController)
4. Znotraj mape app so še modeli, ki skrbijo za povezave z bazo podatkov 

## Funkcionalnosti 
1. Vnos podatkov o kupcih in prodajalcih
2. vnos prodaje 
3. pregled prodaje po prodajalcih klikni na ime prodajalca
4. pregled posameznih prodaj 

Upam, da je dovolj razumljivo  Razvoj bom še naldaljevval ... 

Lep pozdrav Janko Pirih 


# Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
