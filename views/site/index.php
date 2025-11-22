<?php $this->title = 'Главная'; ?>
<div class="site-index">
    <div class="jumbotron text-center bg-light p-4">
        <h1 class="display-5">Информационная система проектной организации</h1>
        <p class="lead">Здесь вы можете ознакомиться с договорами, проектами, сотрудниками и отделами.</p>
    </div>

    <div class="row">
        <div class="col-md-4">
            <h3>Для пользователей</h3>
            <ul class="list-group">
                <li class="list-group-item"><a href="<?= \yii\helpers\Url::to(['site/contacts']) ?>">Контакты</a></li>
                <li class="list-group-item"><a href="<?= \yii\helpers\Url::to(['site/login']) ?>">Логин и регистрация</a></li>
            </ul>
        </div>
        <div class="col-md-8">
            <h3>Просмотр данных</h3>
            <ul class="list-group">
                <li class="list-group-item"><a href="<?= \yii\helpers\Url::to(['site/clients']) ?>">Организации</a></li>
                <li class="list-group-item"><a href="<?= \yii\helpers\Url::to(['site/contracts']) ?>">Договоры</a></li>
                <li class="list-group-item"><a href="<?= \yii\helpers\Url::to(['site/projects']) ?>">Проектные работы</a></li>
                <li class="list-group-item"><a href="<?= \yii\helpers\Url::to(['site/departments']) ?>">Отделы</a></li>
                <li class="list-group-item"><a href="<?= \yii\helpers\Url::to(['site/employees']) ?>">Сотрудники</a></li>
            </ul>
        </div>
    </div>
</div>