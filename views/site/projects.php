<?php $this->title = 'Проектные работы'; ?>
<div class="site-projects">
    <h1>Проектные работы</h1>
    <a href="<?= \yii\helpers\Url::to(['site/index']) ?>" class="btn btn-sm btn-outline-secondary mb-3">&larr; Назад</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>Договор</th>
                    <th>Отдел</th>
                    <th>Начало</th>
                    <th>Окончание</th>
                    <th>Статус</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($projects as $p): ?>
                <tr>
                    <td><?= $p->contract ? \yii\helpers\Html::encode($p->contract->contract_number) : '—' ?></td>
                    <td><?= $p->department ? \yii\helpers\Html::encode($p->department->name) : '—' ?></td>
                    <td><?= $p->start_date ?></td>
                    <td><?= $p->end_date ?: 'в работе' ?></td>
                    <td>
                        <?php if ($p->end_date): ?>
                            <span class="badge bg-success">Завершён</span>
                        <?php else: ?>
                            <span class="badge bg-warning text-dark">В работе</span>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>