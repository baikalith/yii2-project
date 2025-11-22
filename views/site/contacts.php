<?php $this->title = 'Контакты'; ?>
<div class="site-contacts">
    <h1>Контактная информация</h1>
    <div class="card" style="max-width: 600px;">
        <div class="card-body">
            <h5 class="card-title">Проектная организация «СтройПроект»</h5>
            <p><strong>Адрес:</strong> г. Москва, ул. Проектировщиков, д. 15</p>
            <p><strong>Телефон:</strong> +7 (495) 123-45-67</p>
            <p><strong>Email:</strong> info@project-org.ru</p>
            <p><strong>Режим работы:</strong> пн–пт, 9:00–18:00</p>
            <a href="<?= \yii\helpers\Url::to(['site/index']) ?>" class="btn btn-outline-primary">&larr; Назад</a>
        </div>
    </div>
</div>