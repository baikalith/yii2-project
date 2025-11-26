<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="departments-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Название отдела') ?>
    <?= $form->field($model, 'floor')->textInput(['maxlength' => true])->label('Этаж') ?>
    <?= $form->field($model, 'phone')->textInput(['maxlength' => true])->label('Телефон') ?>
    <?= $form->field($model, 'head_id')->textInput(['maxlength' => true])->label('ID начальника') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
