<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Employee */

$this->title = $model->full_name;
$this->params['breadcrumbs'][] = ['label' => 'Сотрудники', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-view">

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
                    'confirm' => 'Вы действительно хотите удалить этого сотрудника?',
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
                'attribute' => 'full_name',
                'label' => 'ФИО',
            ],
            [
                'attribute' => 'position',
                'label' => 'Должность',
            ],
            [
                'attribute' => 'department_id',
                'label' => 'ID отдела',
            ],
            [
                'attribute' => 'gender',
                'label' => 'Пол',
            ],
            [
                'attribute' => 'address',
                'label' => 'Адрес',
            ],
            [
                'attribute' => 'birth_date',
                'label' => 'Дата рождения',
            ],
        ],
    ]) ?>

</div>