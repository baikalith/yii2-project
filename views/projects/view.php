<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Project */

$this->title = 'Проект #' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Проекты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="project-view">

    <h1><?= Html::encode($this->title) ?></h1>
<p>
    <?= Html::a('Назад к списку', ['index'], ['class' => 'btn btn-secondary']) ?>
</p>
    <?php if (!Yii::$app->user->isGuest && Yii::$app->user->identity->role === 'admin'): ?>
        <p>
            <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Вы действительно хотите удалить этот проект?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    <?php endif; ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'start_date',
                'label' => 'Дата начала',
            ],
            [
                'attribute' => 'end_date',
                'label' => 'Дата окончания',
            ],
            [
                'attribute' => 'contract_id',
                'label' => 'ID договора',
            ],
            [
                'attribute' => 'department_id',
                'label' => 'ID отдела',
            ],
        ],
    ]) ?>

</div>