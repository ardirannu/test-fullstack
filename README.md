<h1 id="title">Test Fullstack Developer - Loops.id</h1>

<p id="description">Proyek ini adalah gambaran arsitektur sistem dimana data Users, Posts dan Comments saling berhubungan.</p>
<p id="description">Dimana seorang User memiliki data Post yang memiliki Title, Slug dan Content, Disisi lain Posts memiliki komentar dari User yang telah teregistrasi dan User Guest.</p>

## Installation

First clone this repository, install the dependencies, and setup your .env file.

```
git clone https://github.com/ardirannu/laravel-queue-email.git laravel-queue-email
composer install
cp .env.example .env
```

Then create the necessary database.

```
php artisan db
create database test-fullstack
```

And run the initial migrations and seeders.

```
php artisan migrate --seed
```

  
<h2>💻 Built with</h2>

Technologies used in the project:

*   Laravel 7


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## Author

Ardianto Rannu
