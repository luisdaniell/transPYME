<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Servicio */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Servicio',
]) . ' ' . $model->ser_codigo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Servicios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ser_codigo, 'url' => ['view', 'id' => $model->ser_codigo]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="servicio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
