<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'ИСПО';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 mb-5">
        <h1 class="display-4">Добро пожаловать в ИСПО!</h1>
        <p class="lead">
            Ваша система управления проектами, договорами, отделами и сотрудниками.
        </p>

        <?php if (Yii::$app->user->isGuest): ?>
            <p class="mt-4">
                Чтобы увидеть данные, необходимо авторизироваться.
            </p>
            <p>
                <?= Html::a('Войти', ['site/login'], ['class' => 'btn btn-primary btn-lg']) ?>
            </p>
        <?php else: ?>
            <p class="mt-4">
                <?= Html::a('Перейти к данным', ['/clients/index'], ['class' => 'btn btn-success btn-lg']) ?>
            </p>
        <?php endif; ?>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-md-6 text-center">
            <?= Html::img('@web/images/construction1.jpg', [
                'alt' => 'Строительная площадка 1',
                'class' => 'img-equal',
            ]) ?>
        </div>
        <div class="col-md-6 text-center">
            <?= Html::img('@web/images/construction2.jpg', [
                'alt' => 'Строительная площадка 2',
                'class' => 'img-equal',
            ]) ?>
        </div>
    </div>

</div>