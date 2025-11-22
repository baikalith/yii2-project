<?php $this->title = 'Договоры'; ?>
<div class="site-contracts">
    <h1>Договоры</h1>
    <a href="<?= \yii\helpers\Url::to(['site/index']) ?>" class="btn btn-sm btn-outline-secondary mb-3">&larr; Назад</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-light">
                <tr>
                    <th>№ договора</th>
                    <th>Дата</th>
                    <th>Организация</th>
                    <th>Стоимость</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($contracts as $c): ?>
                <tr>
                    <td><?= \yii\helpers\Html::encode($c->contract_number) ?></td>
                    <td><?= $c->sign_date ?></td>
                    <td><?= $c->client ? \yii\helpers\Html::encode($c->client->name) : '—' ?></td>
                    <td><?= number_format($c->amount, 0, ',', ' ') ?> ₽</td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>