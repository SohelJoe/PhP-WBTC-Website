WBTC-Website Using PhP
==============

This is a sample app for the [API](https://github.com/TiendaNube/api-docs) of [Nuvem Shop](https://www.nuvemshop.com.br) / [Tienda Nube](https://www.tiendanube.com)  using the official [SDK for PHP](https://github.com/TiendaNube/tiendanube-php-sdk).

This app was made using [Laravel](http://laravel.com/). Be sure to check [their documentation](laravel.com/docs).


Installation
------------
First, you will need to install [XAMPP](https://www.apachefriends.org/index.html) following the instructions on their site.

Then, you have to download the [contents of this repository](https://github.com/TiendaNube/sample-php-app/archive/master.zip) and extract it in `xampp\htdocs` folder.

Configuration
-------------
Make sure to define your database connection in `dependency/_dbconnect.php`, then run the provided migration:

```sh
php server start
```

Run XAMPP app and start Apache & MySQL.

Now you can test your app! Just set your redirect_uri to `http://localhost/wbtc` and run a PHP server:

```sh
php artisan serve
```

When you visit [http://localhost:8000](http://localhost:8000) you will be taken to WBTC home page.

