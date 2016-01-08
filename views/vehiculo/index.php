<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\VehiculoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vehiculos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vehiculo-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ingresar nuevo vehículo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'veh_patente',
            //'emp_rut',
            'veh_tipo',
            'veh_marca',
            'veh_color',
            // 'veh_fecha_compra',
            // 'veh_km_compra',
            // 'veh_valor_compra',
             'veh_max_carga',
            //'veh_observaciones',
            // 'veh_carter',
            // 'veh_caja',
            // 'veh_diferencial',
            // 'veh_num_motor',
            // 'veh_num_chasis',
            // 'veh_num_ejes',
            // 'veh_imagen',
             'veh_gps_cod',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
