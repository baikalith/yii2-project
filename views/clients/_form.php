<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Clients $model */
/** @var yii\widgets\ActiveForm $form */

?>

<div class="clients-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->label('Название') ?>
    <?= $form->field($model, 'activity_type')->textInput(['maxlength' => true])->label('Деятельность') ?>
    <?= $form->field($model, 'country')->textInput(['maxlength' => true])->label('Страна') ?>
    <?= $form->field($model, 'city')->textInput(['maxlength' => true])->label('Город') ?>
    <?= $form->field($model, 'address')->textarea(['rows' => 2])->label('Адрес') ?>
    <?= $form->field($model, 'director_name')->textInput(['maxlength' => true])->label('Имя директора') ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>