<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\NeumaticoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="neumatico-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'neu_serie') ?>

    <?= $form->field($model, 'neu_marca') ?>

    <?= $form->field($model, 'neu_valor_compra') ?>

    <?= $form->field($model, 'neu_fecha_compra') ?>

    <?php // echo $form->field($model, 'neu_ancho') ?>

    <?php // echo $form->field($model, 'neu_altura') ?>

    <?php // echo $form->field($model, 'neu_diametro') ?>

    <?php // echo $form->field($model, 'neu_km_acumulados') ?>

    <?php // echo $form->field($model, 'neu_observaciones') ?>

    <?php // echo $form->field($model, 'neu_imagen') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Buscar'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Limpiar'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
