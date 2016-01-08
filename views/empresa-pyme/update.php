<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\EmpresaPyme */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Empresa Pyme',
]) . ' ' . $model->emp_rut;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Empresa Pymes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->emp_rut, 'url' => ['view', 'id' => $model->emp_rut]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="empresa-pyme-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
