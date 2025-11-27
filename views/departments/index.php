<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $departments app\models\Department[] */

$this->title = 'Отделы';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="department-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (!Yii::$app->user->isGuest && Yii::$app->user->identity->role === 'admin'): ?>
        <p>
            <?= Html::a('Добавить отдел', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif; ?>

    <table class="table table-striped table-bordered">
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Этаж</th>
            <th>Телефон</th>
            <th>ID начальника</th>
            <th></th>
        </tr>
        <?php foreach ($departments as $department): ?>
            <tr>
                <td><?= $department->id ?></td>
                <td><?= Html::encode($department->name) ?></td>
                <td><?= Html::encode($department->floor) ?></td>
                <td><?= Html::encode($department->phone) ?></td>
                <td><?= Html::encode($department->head_id) ?></td>
                <td>
                    <?= Html::a('👁', ['view', 'id' => $department->id], ['title' => 'Просмотр']) ?>
                    <?php if (!Yii::$app->user->isGuest && Yii::$app->user->identity->role === 'admin'): ?>
                        <?= Html::a('✏', ['update', 'id' => $department->id], ['title' => 'Редактировать']) ?>
                        <?= Html::a('🗑', ['delete', 'id' => $department->id], [
                            'title' => 'Удалить',
                            'data' => [
                                'confirm' => 'Удалить этот отдел?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>