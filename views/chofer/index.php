<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChoferSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Choferes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chofer-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Ingresar nuevo chofer', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cho_rut',
            'cho_num_licencia',
            'cho_primer_nombre',
            //'cho_segundo_nombre',
            'cho_apell_paterno',
            'cho_apell_materno',
            // 'cho_fecha_nac',
            // 'cho_direccion',
             'cho_telefono',
             'cho_email:email',
            // 'cho_imagen',
            // 'cho_sueldo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
