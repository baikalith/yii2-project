<?php

use app\models\Projects;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$this->title = 'Проекты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Добавить проект', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            'id',
            [
                'attribute' => 'start_date',
                'label' => 'Дата начала'
            ],
            [
                'attribute' => 'end_date',
                'label' => 'Дата окончания'
            ],
            [
                'attribute' => 'contract_id',
                'label' => 'Договор (ID)'
            ],
            [
                'attribute' => 'department_id',
                'label' => 'Отдел (ID)'
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Projects $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>
</div>
