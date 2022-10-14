# PHP CS Fixer

Для того чтобы воспользоваться  PHP CS Fixer вам нужно сделать следующий шаги:

### Если у вас в приложении уже установлен пакет tool-common-microservice версии 1.1.0 и выше:

1) Установить или обновить зависимости;

```jsx
composer update  или composer install
```

2) При необходимости можете опубликовать и отредактировать конфигурацию PHP CS Fixer

```bash
php artisan vendor:publish
```

2) Запустить PHP CS Fixer;

```jsx
php artisan cs:fix
```

Если не передавать никаких параметров, то будут исправлены следующие папки:

1. app;
2. tests;
3. config;
4. database;
5. routes;

Так же вы можете указать папки, код к которых вы ходите проверить, папки или пути, если их несколько следует указывать через запятую:

```php
php artisan cs:fix database,tests,app/Providers

php artisan cs:fix /var/html/domain/app
```

---

### Если у вас не установлен tool-common-microservice:

a) установите tool-common-microservice;

б) установите cs-fixer вручную:

- добавьте в composer.json в раздел require следующую строку:

```php
"bolideai/cs-fixer": "^1.0.0"
```

- Добавьте (или обновите) внешние репозитории (в обозримом будущем, этого пункта не будет и будет обычная установка composer пакета);

```php
"repositories": [
    {
        "type": "vcs",
        "url":  "git@github.com:bolideai/tool-cs-fixer.git"
    }
]
```
