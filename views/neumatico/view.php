<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Neumatico */

$this->title = $model->neu_serie;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Neumaticos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="neumatico-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Actualizar este neumático'), ['update', 'id' => $model->neu_serie], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Eliminar este neumático'), ['delete', 'id' => $model->neu_serie], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', '¿Está seguro que desea eliminar este neumático?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'neu_serie',
            //'emp_rut',
            'neu_marca',
            'neu_valor_compra',
            'neu_fecha_compra',
            'neu_ancho',
            'neu_altura',
            'neu_diametro',
            'neu_km_acumulados',
            'neu_observaciones',
            //'neu_imagen',
        ],
    ]) ?>

</div>
