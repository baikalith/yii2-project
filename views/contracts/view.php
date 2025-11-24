<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->contract_number;
$this->params['breadcrumbs'][] = ['label' => 'Договоры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contracts-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы действительно хотите удалить?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'contract_number',
                'label' => 'Номер договора'
            ],
            [
                'attribute' => 'sign_date',
                'label' => 'Дата подписания'
            ],
            [
                'attribute' => 'client_id',
                'label' => 'Клиент (ID)'
            ],
            [
                'attribute' => 'amount',
                'label' => 'Сумма'
            ],
        ],
    ]) ?>

</div>