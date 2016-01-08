<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CarroSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Carros';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carro-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ingresar nuevo carro', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'car_patente',
            //'emp_rut',
            'car_marca',
            'car_num_ejes',
            'car_tipo',
            // 'car_fecha_compra',
            // 'car_valor_compra',
            // 'car_observacion',
            // 'car_imagen',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
