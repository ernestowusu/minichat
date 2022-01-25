## MINI CHAT APP

This is a mini chat app built with vue and laravel

## HOW TO INSTALL

**Step to install**

Go to project directory using cmd

```
composer install
```

In project directory find **_.env.example_** and rename to **_.env_**

Generate laravel application key

```
php artisan key:generate
```

Also change **DB_DATABASE, DB_USERNAME, DB_PASSWORD** in .env

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your db name
DB_USERNAME=your db username
DB_PASSWORD=your db password
```

Enter nodejs folder

install node dependencies

```
npm install
```
**Start Node JS Chat Server**

Go to project directory using **Terminal / CMD** Open **nodejs** folder

```
export NODE_ENV=dev
npm start
```

**Start Laravel Server**

Open Second **Terminal / CMD** Go to project directory

```
php artisan serve
```

