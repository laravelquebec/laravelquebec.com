## Laravel Québec

### Start the app

```
    composer install
    cp .env.example .env
    php artisan serve
```

[localhost:8000](localhost:8000)

### Tests

#### Behat
```
    cp .env.example .env.behat
    alias behat=vendor/behat/behat/bin/behat
    behat
```

#### PhpUnit

```
    alias phpunit=vendor/phpunit/phpunit/phpunit
    phpunit
```
