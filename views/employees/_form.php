<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Employees $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->dropDownList([ 'конструктор' => 'Конструктор', 'инженер' => 'Инженер', 'техник' => 'Техник', 'лаборант' => 'Лаборант', 'обслуживающий персонал' => 'Обслуживающий персонал', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'department_id')->textInput() ?>

    <?= $form->field($model, 'gender')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'birth_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
