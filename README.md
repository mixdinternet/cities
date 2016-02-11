# Cities
Pacote de Estados / Cidades / Bairros brasileiros para o Laravel

## Instalação

Adicione no seu composer.json

```js
  "require": {
    "mixdinternet/cities": "0.1.*"
  }
```

ou

```js
  composer require mixdinternet/cities
```

## Service Provider

Abra o arquivo `config/app.php` e adicione

`Mixdinternet\Cities\Providers\CitiesServiceProvider::class`

## Publicando os arquivos

```
$ php artisan vendor:publish --provider="Mixdinternet\Cities\Providers\CitiesServiceProvider"
```

## Criando e alimentando as tabelas

```
$ composer dump-autoload
$ php artisan migrate
$ php artisan db:seed --class="StateTableSeeder"
$ php artisan db:seed --class="CityTableSeeder"
$ php artisan db:seed --class="NeighborhoodTableSeeder"
```