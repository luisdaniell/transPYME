<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VehiculoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehiculo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'veh_patente') ?>

    <?= $form->field($model, 'emp_rut') ?>

    <?= $form->field($model, 'veh_tipo') ?>

    <?= $form->field($model, 'veh_marca') ?>

    <?= $form->field($model, 'veh_color') ?>

    <?php // echo $form->field($model, 'veh_fecha_compra') ?>

    <?php // echo $form->field($model, 'veh_km_compra') ?>

    <?php // echo $form->field($model, 'veh_valor_compra') ?>

    <?php // echo $form->field($model, 'veh_max_carga') ?>

    <?php // echo $form->field($model, 'veh_observaciones') ?>

    <?php // echo $form->field($model, 'veh_carter') ?>

    <?php // echo $form->field($model, 'veh_caja') ?>

    <?php // echo $form->field($model, 'veh_diferencial') ?>

    <?php // echo $form->field($model, 'veh_num_motor') ?>

    <?php // echo $form->field($model, 'veh_num_chasis') ?>

    <?php // echo $form->field($model, 'veh_num_ejes') ?>

    <?php // echo $form->field($model, 'veh_imagen') ?>

    <?php // echo $form->field($model, 'veh_gps_cod') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
