<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CarroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'car_patente') ?>

    <?= $form->field($model, 'emp_rut') ?>

    <?= $form->field($model, 'car_marca') ?>

    <?= $form->field($model, 'car_num_ejes') ?>

    <?= $form->field($model, 'car_tipo') ?>

    <?php // echo $form->field($model, 'car_fecha_compra') ?>

    <?php // echo $form->field($model, 'car_valor_compra') ?>

    <?php // echo $form->field($model, 'car_observacion') ?>

    <?php // echo $form->field($model, 'car_imagen') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
