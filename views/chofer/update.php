<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Chofer */

$this->title = 'Actualizar chofer: ' . ' ' . $model->cho_rut;
$this->params['breadcrumbs'][] = ['label' => 'Choferes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cho_rut, 'url' => ['view', 'id' => $model->cho_rut]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="chofer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
