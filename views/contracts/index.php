<?php

use app\models\Contracts;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$this->title = 'Договоры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contracts-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Добавить договор', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
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
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Contracts $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>
</div>