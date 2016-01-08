<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Carro */

$this->title = $model->car_patente;
$this->params['breadcrumbs'][] = ['label' => 'Carros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->car_patente], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->car_patente], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Está seguro que desea eliminar este carro del sistema?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'car_patente',
            //'emp_rut',
            'car_marca',
            'car_num_ejes',
            'car_tipo',
            'car_fecha_compra',
            'car_valor_compra',
            'car_observacion',
            //'car_imagen',
        ],
    ]) ?>

</div>
