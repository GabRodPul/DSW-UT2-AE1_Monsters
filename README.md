# Monster Hunter app
Simple fullstack app that serves as an encyclopedia for large monsters from the Monster Hunter series.

## Features
- Fully functioning CRUD for a single table.

## Instructions 🚀

### BEFORE MOVING ON
Laragon uses it's own MySQL. If you already have MySQL installed, make sure to stop the service before running anything.
If you still get errors related to database authentification, stop the Artisan server and run the "clear-cache" script.

### Prerequisites 📋

Prerequisites
- Git (for easy cloning).
- Node.js binaries (v20.17.0).
- MySQL binaries.
- PHP binaries (8.3).
- Laragon.
- A browser to visualise content.

### Installation 🔧

First, clone this repository.
```
git clone https://github.com/GabRodPul/DSW-UT2-AE1_Monsters.git
```

After that install.
```
cd DSW-UT2-AE1_Monsters && composer update && composer install
```

Fill your .env file with the necessary credentials. Use .env.example as a base.
```
...
DB_USERNAME="MY_USER"
DB_PASSWORD="MY_PASSWORD"
...
```

Then, run the migrations.
```
php artisan migrate
```

To start the frontend, run Laragon and Start All.
To run the actual project:
```
php artisan serve
```

## Built with 🛠️
* [Laravel](https://laravel.com/) - Web framework
* [Laragon](https://laragon.org/)
* [MySQL](https://www.mysql.com/) - Database

## Authors ✒️
* **Gabriel Rodríguez Pulido** - [GabRodPul](https://github.com/GabRodPul)

## Special thanks 🎁

* TIBURCIO
