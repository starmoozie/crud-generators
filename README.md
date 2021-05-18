# Starmoozie Generators

## Install

Via Composer

``` bash
composer require starmoozie/generators --dev
```

## Usage

Open the console and enter one of the commands:


- **Generate Starmoozie\CRUD interfaces for all Eloquent models that don't already have one:**

```bash
php artisan starmoozie:build
```

- **Generate all files for one new Starmoozie\CRUD interface:**

``` bash
php artisan starmoozie:crud {Entity_name}

# this will create a Model if there isn't one, or add
# our CrudTrait to the model if it already exists
```

- Generate a new Starmoozie\CRUD file:
``` bash
php artisan starmoozie:crud-controller {Entity_name}
php artisan starmoozie:crud-model {Entity_name}
php artisan starmoozie:crud-request {Entity_name}
```

- Generate a model (available options: --softdelete)

``` bash
php artisan starmoozie:model {Entity_name}
```

- Generate a request

``` bash
php artisan starmoozie:request {Entity_name}
```

- Generate a view (available options: --plain)

``` bash
php artisan starmoozie:view {Entity_name}
``` 

- Generate a config file

``` bash
php artisan starmoozie:config {Entity_name}
```