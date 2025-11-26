<?php

use app\models\Departments;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$this->title = 'Отделы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Добавить отдел', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            'id',
            [
                'attribute' => 'name',
                'label' => 'Название отдела'
            ],
            [
                'attribute' => 'floor',
                'label' => 'Этаж'
            ],
            [
                'attribute' => 'phone',
                'label' => 'Телефон'
            ],
            [
                'attribute' => 'head_id',
                'label' => 'ID начальника'
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Departments $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>
</div>
