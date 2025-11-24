<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Clients $model */

$this->title = 'Изменить организацию: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Клиенты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clients-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>