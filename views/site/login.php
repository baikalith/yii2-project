<?php $this->title = 'Логин и регистрация'; ?>
<div class="site-login">
    <h1>Авторизация</h1>
    <div class="card" style="max-width: 600px;">
        <div class="card-body">
            <p>Для входа в систему используйте логин и пароль, выданные администратором.</p>
            <p><em>Функционал входа и регистрации реализован в backend -части (Yii2 Advanced).</em></p>
            
            <h3>Для администратора:</h3>
            <p>Роль «admin» добавляется вручную в таблицу <code>user</code> (см. задание, п.7 Части №2).</p>

            <a href="<?= \yii\helpers\Url::to(['site/index']) ?>" class="btn btn-outline-primary">&larr; Вернуться на главную</a>
        </div>
    </div>
</div>