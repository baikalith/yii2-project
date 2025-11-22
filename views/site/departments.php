<?php $this->title = 'Отделы'; ?>
<div class="site-departments">
    <h1>Список отделов</h1>
    <a href="<?= \yii\helpers\Url::to(['site/index']) ?>" class="btn btn-sm btn-outline-secondary mb-3">&larr; Назад</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Название отдела</th>
                    <th>Этаж</th>
                    <th>Телефон</th>
                    <th>Начальник (ID)</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($departments as $d): ?>
                <tr>
                    <td><?= $d->id ?></td>
                    <td><?= \yii\helpers\Html::encode($d->name) ?></td>
                    <td><?= $d->floor ?></td>
                    <td><?= \yii\helpers\Html::encode($d->phone ?: '—') ?></td>
                    <td><?= $d->head_id ?: '—' ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>