<?php

use app\models\Clients;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$this->title = 'Клиенты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Добавить организацию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            'id',
            [
                'attribute' => 'name',
                'label' => 'Название'
            ],
            [
                'attribute' => 'activity_type',
                'label' => 'Деятельность'
            ],
            [
                'attribute' => 'country',
                'label' => 'Страна'
            ],
            [
                'attribute' => 'city',
                'label' => 'Город'
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Clients $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>
</div>