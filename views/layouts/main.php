<?php

/** @var \yii\web.View $this */
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <?= Html::cssFile('@web/css/site.css') ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
<?php
NavBar::begin([
    'brandLabel' => 'ИСПО',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar navbar-expand-lg navbar-dark bg-dark',
    ],
]);

// ЛЕВОЕ МЕНЮ
echo Nav::widget([
    'options' => ['class' => 'navbar-nav me-auto mb-2 mb-lg-0'],
    'items' => [
        ['label' => 'Главная', 'url' => ['/site/index']],
        ['label' => 'Контакты', 'url' => ['/site/contacts']],

        !Yii::$app->user->isGuest
            ? ['label' => 'Данные', 'items' => [
                ['label' => 'Организации', 'url' => ['/clients/index']],
                ['label' => 'Договоры', 'url' => ['/contracts/index']],
                ['label' => 'Проектные работы', 'url' => ['/projects/index']],
                ['label' => 'Отделы', 'url' => ['/departments/index']],
                ['label' => 'Сотрудники', 'url' => ['/employees/index']],
            ]]
            : '',
    ],
]);

// ПРАВОЕ МЕНЮ: Войти / Выйти
echo Nav::widget([
    'options' => ['class' => 'navbar-nav ms-auto mb-2 mb-lg-0'],
    'encodeLabels' => false,
    'items' => [
        Yii::$app->user->isGuest
            ? ['label' => 'Войти', 'url' => ['/site/login']]
            : '<li class="nav-item">'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'd-inline'])
                . Html::submitButton(
                    'Выйти (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link nav-link', 'style' => 'padding:0;']
                )
                . Html::endForm()
              . '</li>',
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