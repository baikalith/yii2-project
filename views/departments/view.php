<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'Отдел: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Отделы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="departments-view">

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
        ],
    ]) ?>

</div>
