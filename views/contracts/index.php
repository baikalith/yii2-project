<?php

use app\models\Contracts;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContractsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Договоры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (!Yii::$app->user->isGuest && Yii::$app->user->identity->role === 'admin'): ?>
        <p>
            <?= Html::a('Добавить договор', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif; ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel'  => $searchModel,
        'summary'      => '',
        'columns' => [
            'id',
            [
                'attribute' => 'contract_number',
                'label' => 'Номер договора',
            ],
            [
                'attribute' => 'sign_date',
                'label' => 'Дата подписания',
            ],
            [
                'attribute' => 'client_id',
                'label' => 'ID клиента',
            ],
            [
                'attribute' => 'amount',
                'label' => 'Сумма',
            ],
            [
                'class' => ActionColumn::className(),
                'template' => !Yii::$app->user->isGuest
                    && Yii::$app->user->identity->role === 'admin'
                        ? '{view} {update} {delete}'
                        : '{view}',
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
            ],
        ],
    ]); ?>
</div>