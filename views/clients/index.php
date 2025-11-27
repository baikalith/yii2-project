<?php

use app\models\Clients;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ClientsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Клиенты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (!Yii::$app->user->isGuest && Yii::$app->user->identity->role === 'admin'): ?>
        <p>
            <?= Html::a('Добавить организацию', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif; ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel'  => $searchModel,
        'summary'      => '',
        'columns' => [
            'id',
            [
                'attribute' => 'name',
                'label' => 'Название',
            ],
            [
                'attribute' => 'activity_type',
                'label' => 'Деятельность',
            ],
            [
                'attribute' => 'country',
                'label' => 'Страна',
            ],
            [
                'attribute' => 'city',
                'label' => 'Город',
            ],
            [
                'class' => ActionColumn::className(),
                'template' => !Yii::$app->user->isGuest && Yii::$app->user->identity->role === 'admin'
                    ? '{view} {update} {delete}'
                    : '{view}',
                'urlCreator' => function ($action, Clients $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                },
            ],
        ],
    ]); ?>
</div>