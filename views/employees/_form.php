<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="employees-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'full_name')->textInput(['maxlength' => true])->label('ФИО') ?>
    <?= $form->field($model, 'position')->textInput(['maxlength' => true])->label('Должность') ?>
    <?= $form->field($model, 'department_id')->textInput(['maxlength' => true])->label('Номер отдела') ?>
    <?= $form->field($model, 'gender')->dropDownList(['М' => 'Мужской', 'Ж' => 'Женский'])->label('Пол') ?>
    <?= $form->field($model, 'address')->textInput(['maxlength' => true])->label('Адрес') ?>
    <?= $form->field($model, 'birth_date')->textInput(['type'=>'date'])->label('Дата рождения') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
