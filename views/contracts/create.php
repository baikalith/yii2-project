<?php

use yii\helpers\Html;

$this->title = 'Добавить договор';
$this->params['breadcrumbs'][] = ['label' => 'Договоры', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contracts-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>