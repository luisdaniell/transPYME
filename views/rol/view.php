<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Rol */

$this->title = $model->rol_codigo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Roles de sistema'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rol-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Actualizar'), ['update', 'id' => $model->rol_codigo], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Eliminar'), ['delete', 'id' => $model->rol_codigo], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', '¿Está seguro que desea eliminar este rol del sistema?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'rol_codigo',
            'rol_nombre',
        ],
    ]) ?>

</div>
