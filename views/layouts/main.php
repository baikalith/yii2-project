<?php

/** @var \yii\web\View $this */
/** @var string $content */

use yii\bootstrap5\BootstrapAsset;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

BootstrapAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title ?? 'Информационная система проектной организации') ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
<?php
NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar navbar-expand-lg navbar-dark bg-dark',
    ],
]);

echo Nav::widget([
    'options' => ['class' => 'navbar-nav me-auto mb-2 mb-lg-0'],
    'items' => [
        ['label' => 'Главная', 'url' => ['/site/index']],
        ['label' => 'Контакты', 'url' => ['/site/contacts']],
        ['label' => 'Логин и регистрация', 'url' => ['/site/login']],
        ['label' => 'Данные', 'items' => [
            ['label' => 'Организации', 'url' => ['/site/clients']],
            ['label' => 'Договоры', 'url' => ['/site/contracts']],
            ['label' => 'Проектные работы', 'url' => ['/site/projects']],
            ['label' => 'Отделы', 'url' => ['/site/departments']],
            ['label' => 'Сотрудники', 'url' => ['/site/employees']],
        ]],
    ],
]);

NavBar::end();
?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container mt-4">
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 bg-light">
    <div class="container text-center">
        <span class="text-muted">
            &copy; <?= date('Y') ?> Проектная организация. Учебная практика УП.02
        </span>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>