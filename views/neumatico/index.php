<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NeumaticoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Neumáticos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="neumatico-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Registrar nuevo neumático'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'neu_serie',
            //'emp_rut',
            'neu_marca',
            'neu_valor_compra',
            'neu_fecha_compra',
             'neu_ancho',
             'neu_altura',
            // 'neu_diametro',
             'neu_km_acumulados',
            // 'neu_observaciones',
            // 'neu_imagen',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
