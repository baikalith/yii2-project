<?php
use app\models\User;
use yii\console\Application;

// загружаем Yii
require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/yiisoft/yii2/Yii.php';
$config = require __DIR__ . '/config/web.php';
new Application($config);

// создаём админа
$admin = new User();
$admin->username = 'admin';
$admin->setPassword('Admin123');      // ПАРОЛЬ АДМИНА
$admin->generateAuthKey();
$admin->role = 'admin';
$admin->created_at = time();
$admin->updated_at = time();
$admin->save();

// создаём обычного пользователя
$user = new User();
$user->username = 'user';
$user->setPassword('User123');        // ПАРОЛЬ USER
$user->generateAuthKey();
$user->role = 'user';
$user->created_at = time();
$user->updated_at = time();
$user->save();

echo "Users created\n";