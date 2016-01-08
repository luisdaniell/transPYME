<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rol */

$this->title = Yii::t('app', 'Actualizar rol de sistema {modelClass}: ', [
    'modelClass' => 'Rol',
]) . ' ' . $model->rol_codigo;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Roles de sistema'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->rol_nombre, 'url' => ['view', 'id' => $model->rol_codigo]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar rol de sistema');
?>
<div class="rol-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
