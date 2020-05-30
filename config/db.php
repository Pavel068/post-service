<?php

require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::create(__DIR__ . '/../');
$dotenv->load();

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=' . getenv('MYSQL_HOST') . ';dbname=' . getenv('MYSQL_DB_NAME'),
    'username' => getenv('MYSQL_USERNAME'),
    'password' => getenv('MYSQL_PASSWORD'),
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
