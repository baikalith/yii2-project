<?php $this->title = 'Сотрудники'; ?>
<div class="site-employees">
    <h1>Сотрудники</h1>
    <a href="<?= \yii\helpers\Url::to(['site/index']) ?>" class="btn btn-sm btn-outline-secondary mb-3">&larr; Назад</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>ФИО</th>
                    <th>Должность</th>
                    <th>Отдел</th>
                    <th>Пол</th>
                    <th>Дата рождения</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($employees as $e): ?>
                <tr>
                    <td><?= \yii\helpers\Html::encode($e->full_name) ?></td>
                    <td><?= \yii\helpers\Html::encode($e->position) ?></td>
                    <td><?= $e->department ? \yii\helpers\Html::encode($e->department->name) : '—' ?></td>
                    <td><?= $e->gender === 'М' ? 'Мужской' : ($e->gender === 'Ж' ? 'Женский' : '—') ?></td>
                    <td><?= $e->birth_date ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>