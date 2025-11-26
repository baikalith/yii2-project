<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

$this->title = 'Проект №' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Проекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projects-view">

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
        ],
    ]) ?>

</div>
