<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $employees app\models\Employee[] */

$this->title = 'Сотрудники';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employee-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (!Yii::$app->user->isGuest && Yii::$app->user->identity->role === 'admin'): ?>
        <p>
            <?= Html::a('Добавить сотрудника', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif; ?>

    <table class="table table-striped table-bordered">
        <tr>
            <th>ID</th>
            <th>ФИО</th>
            <th>Должность</th>
            <th>ID отдела</th>
            <th>Пол</th>
            <th>Адрес</th>
            <th>Дата рождения</th>
            <th></th>
        </tr>
        <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?= $employee->id ?></td>
                <td><?= Html::encode($employee->full_name) ?></td>
                <td><?= Html::encode($employee->position) ?></td>
                <td><?= Html::encode($employee->department_id) ?></td>
                <td><?= Html::encode($employee->gender) ?></td>
                <td><?= Html::encode($employee->address) ?></td>
                <td><?= Html::encode($employee->birth_date) ?></td>
                <td>
                    <?= Html::a('👁', ['view', 'id' => $employee->id], ['title' => 'Просмотр']) ?>
                    <?php if (!Yii::$app->user->isGuest && Yii::$app->user->identity->role === 'admin'): ?>
                        <?= Html::a('✏', ['update', 'id' => $employee->id], ['title' => 'Редактировать']) ?>
                        <?= Html::a('🗑', ['delete', 'id' => $employee->id], [
                            'title' => 'Удалить',
                            'data' => [
                                'confirm' => 'Удалить этого сотрудника?',
                                'method' => 'post',
                            ],
                        ]) ?>
                    <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>