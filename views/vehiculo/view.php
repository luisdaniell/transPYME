<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Vehiculo */

$this->title = $model->veh_patente;
$this->params['breadcrumbs'][] = ['label' => 'Vehículos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehiculo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->veh_patente], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->veh_patente], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'veh_patente',
            'emp_rut',
            'veh_tipo',
            'veh_marca',
            'veh_color',
            'veh_fecha_compra',
            'veh_km_compra',
            'veh_valor_compra',
            'veh_max_carga',
            'veh_observaciones',
            'veh_carter',
            'veh_caja',
            'veh_diferencial',
            'veh_num_motor',
            'veh_num_chasis',
            'veh_num_ejes',
            'veh_imagen',
            'veh_gps_cod',
        ],
    ]) ?>

</div>
