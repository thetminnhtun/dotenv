<?php

include 'vendor/autoload.php';

TMH\Dotenv::create();

echo getenv('APP_NAME');