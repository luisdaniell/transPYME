<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Chofer */

$this->title = $model->cho_primer_nombre.' '.$model->cho_apell_paterno.' '.$model->cho_apell_materno;
$this->params['breadcrumbs'][] = ['label' => 'Choferes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="chofer-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->cho_rut], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->cho_rut], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Está seguro que desea eliminar este chofer del sistema?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cho_rut',
            'cho_num_licencia',
            'cho_primer_nombre',
            'cho_segundo_nombre',
            'cho_apell_paterno',
            'cho_apell_materno',
            'cho_fecha_nac',
            'cho_direccion',
            'cho_telefono',
            'cho_email:email',
            //'cho_imagen',
            'cho_sueldo',
        ],
    ]) ?>

</div>
