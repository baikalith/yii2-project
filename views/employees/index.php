<?php

use app\models\Employees;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

$this->title = 'Сотрудники';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Добавить сотрудника', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'summary' => '',
        'columns' => [
            'id',
            [
                'attribute' => 'full_name',
                'label' => 'ФИО'
            ],
            [
                'attribute' => 'position',
                'label' => 'Должность'
            ],
            [
                'attribute' => 'department_id',
                'label' => 'Номер отдела'
            ],
            [
                'attribute' => 'gender',
                'label' => 'Пол'
            ],
            [
                'attribute' => 'address',
                'label' => 'Адрес'
            ],
            [
                'attribute' => 'birth_date',
                'label' => 'Дата рождения'
            ],
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Employees $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>
</div>
