# PHP dotenv

Enviroment variable for PHP development

### Installation with Composer

`composer require thetminnhtun/dotenv`

### Usage

- Create `.env` file and write following code
```
APP_NAME=ProjectName
APP_ENV=local
APP_URL=http://localhost
```

- Create `index.php` file and write following code
```php
<?php

include 'vendor/autoload.php';

TMH\Dotenv::create();

echo getenv('APP_NAME');
```

- install `dovenv` package by following command
```
composer require thetminnhtun/dotenv
```

- done!