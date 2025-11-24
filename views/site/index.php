<?php
$this->title = 'ИСПО – Информационная система проектной организации';
?>
<div class="site-index">

    <div class="jumbotron text-center bg-light">
        <h1 class="display-4">Добро пожаловать в ИСПО!</h1>
        <p class="lead mt-3 mb-4">Ваша современная система для управления проектами, договорами, отделами и сотрудниками.</p>
        <p>Быстро ищите информацию, управляйте бизнес-процессами и находите нужные связи между всеми элементами вашей организации.</p>
        <?= yii\helpers\Html::a('Перейти к данным', ['departments/index'], ['class' => 'btn btn-success btn-lg']) ?>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-success text-white">Для пользователей</div>
                <div class="card-body">
                    <ul>
                        <li>Контакты руководства</li>
                        <li>Логин и регистрация</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">Просмотр данных</div>
                <div class="card-body">
                    <ul>
                        <li>Отделы и сотрудники</li>
                        <li>Договоры</li>
                        <li>Проекты</li>
                        <li>Клиенты</li>
                        <li>Организации</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>