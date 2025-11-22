<?php $this->title = 'Организации'; ?>
<div class="site-clients">
    <h1>Организации (заказчики)</h1>
    <a href="<?= \yii\helpers\Url::to(['site/index']) ?>" class="btn btn-sm btn-outline-secondary mb-3">&larr; Назад</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>Название</th>
                    <th>Тип деятельности</th>
                    <th>Город</th>
                    <th>Директор</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($clients as $c): ?>
                <tr>
                    <td><?= \yii\helpers\Html::encode($c->name) ?></td>
                    <td><?= \yii\helpers\Html::encode($c->activity_type) ?></td>
                    <td><?= \yii\helpers\Html::encode($c->city) ?></td>
                    <td><?= \yii\helpers\Html::encode($c->director_name) ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>