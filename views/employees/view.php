<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = $model->full_name;
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-view">

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
            ['attribute' => 'full_name',   'label' => 'ФИО'],
            ['attribute' => 'position',    'label' => 'Должность'],
            ['attribute' => 'department_id','label' => 'Номер отдела'],
            ['attribute' => 'gender',      'label' => 'Пол'],
            ['attribute' => 'address',     'label' => 'Адрес'],
            ['attribute' => 'birth_date',  'label' => 'Дата рождения'],
        ],
    ]) ?>

</div>
