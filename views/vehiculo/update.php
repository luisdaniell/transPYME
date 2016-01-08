<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vehiculo */

$this->title = 'Actualizar vehículo: ' . ' ' . $model->veh_patente;
$this->params['breadcrumbs'][] = ['label' => 'Vehículos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->veh_patente, 'url' => ['view', 'id' => $model->veh_patente]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vehiculo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
