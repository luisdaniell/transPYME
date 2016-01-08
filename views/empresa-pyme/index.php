<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EmpresaPymeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Empresas PYME');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empresa-pyme-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Crear nueva cuenta de servicio'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'emp_rut',
            'emp_nombre',
            'emp_giro',
            'emp_rubro',
            'emp_telefono',
            // 'emp_direccion',
             'emp_email:email',
            // 'emp_descripcion',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
