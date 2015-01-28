Laravel PHP Etcd Client

## Usage

```
Etcd::set('/foo', 'fooValue');

// Set the ttl
Etcd::set('/foo', 'fooValue', 10);
// get key value
echo Etcd::get('/foo');

// Update value with key
Etcd::update('/foo', 'newFooValue');

// Delete key
Etcd::rm('/foo');

// Create a directory
Etcd::mkdir('/fooDir');
// Remove dir
Etcd::rmdir('/fooDir');
```

## Installation

Require this package with composer:

```
composer require gxela/laravel-etcd
```

After updating composer, add the ServiceProvider to the providers array in app/config/app.php

```
'Gxela\LaravelEtcd\LaravelEtcdServiceProvider',
```

If you want to use the facade, add this in app.php:

```
'Etcd' => 'Gxela\LaravelEtcd\LaravelEtcdFacade',
```

You need to publish the package config:

```
php artisan config:publish gxela/laravel-etcd
```

## Todo

test with a working etcd server running on CoreOS, that doesn't timeout like the one I have installed on homestead