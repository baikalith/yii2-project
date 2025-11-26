<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="projects-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'start_date')->textInput(['maxlength' => true])->label('Дата начала') ?>
    <?= $form->field($model, 'end_date')->textInput(['maxlength' => true])->label('Дата окончания') ?>
    <?= $form->field($model, 'contract_id')->textInput(['maxlength' => true])->label('Договор (ID)') ?>
    <?= $form->field($model, 'department_id')->textInput(['maxlength' => true])->label('Отдел (ID)') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
