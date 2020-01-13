<?php
if (file_exists(__DIR__ . '/db.local.php')) {
    return require(__DIR__ . '/db.local.php');
}
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
