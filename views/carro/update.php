<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Carro */

$this->title = 'Actualizar carro: ' . ' ' . $model->car_patente;
$this->params['breadcrumbs'][] = ['label' => 'Carros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->car_patente, 'url' => ['view', 'id' => $model->car_patente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="carro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
