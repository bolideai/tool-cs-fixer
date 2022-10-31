# PHP CS Fixer

## Installation

### For microservice
If your application is microservice, install CS fixer via the [tool-common-microservice](https://github.com/bolideai/tool-common-microservice) package. Etherelse install cs-fixer:

### For simple application
If your application is non-microservice, install CS fixer manually:
1) Add to composer.json following line:
```php
"bolideai/cs-fixer": "^1.0.0"
```
2) Add external repository:
```php
"repositories": [
    {
        "type": "vcs",
        "url":  "git@github.com:bolideai/tool-cs-fixer.git"
    }
]
```
3) Run composer update
```bash
composer update bolideai/cs-fixer
```

### Configuration
If you want, you can publish and edit a PHP CS Fixer configuration:

```bash
php artisan vendor:publish
```


### Usage
Run PHP CS Fixer:

```jsx
php artisan cs:fix
```

By default, the following folders will scan and modify:

1. app;
2. tests;
3. config;
4. database;
5. routes;

Also, you can set folders manually by passing it as an argument. For example

```bash
php artisan cs:fix database,tests,app/Providers
php artisan cs:fix /var/html/domain/app
```