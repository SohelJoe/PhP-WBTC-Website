WBTC-Website Using PhP
==============




Installation
------------
First, you will need to install [XAMPP](https://www.apachefriends.org/index.html) following the instructions on their site.

Then, you have to download the [contents of this repository](https://github.com/TiendaNube/sample-php-app/archive/master.zip) and extract it in `xampp\htdocs` folder.

Configuration
-------------

Run XAMPP app and start Apache & MySQL.

Make sure to define your database connection in `dependency/_dbconnect.php`, then run the provided migration:

Open Website
-------------

Now you can test your app! Just set your redirect_uri to `http://localhost/wbtc` and run a PHP server:

When you visit [http://localhost](http://localhost) you will be taken to WBTC home page.

