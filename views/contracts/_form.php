<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<div class="contracts-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'contract_number')->textInput(['maxlength' => true])->label('Номер договора') ?>
    <?= $form->field($model, 'sign_date')->textInput(['maxlength' => true])->label('Дата подписания') ?>
    <?= $form->field($model, 'client_id')->textInput(['maxlength' => true])->label('Клиент (ID)') ?>
    <?= $form->field($model, 'amount')->textInput(['maxlength' => true])->label('Сумма') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>