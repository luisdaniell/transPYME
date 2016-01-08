<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChoferSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chofer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cho_rut') ?>

    <?= $form->field($model, 'cho_num_licencia') ?>

    <?= $form->field($model, 'cho_primer_nombre') ?>

    <?= $form->field($model, 'cho_segundo_nombre') ?>

    <?= $form->field($model, 'cho_apell_paterno') ?>

    <?php // echo $form->field($model, 'cho_apell_materno') ?>

    <?php // echo $form->field($model, 'cho_fecha_nac') ?>

    <?php // echo $form->field($model, 'cho_direccion') ?>

    <?php // echo $form->field($model, 'cho_telefono') ?>

    <?php // echo $form->field($model, 'cho_email') ?>

    <?php // echo $form->field($model, 'cho_imagen') ?>

    <?php // echo $form->field($model, 'cho_sueldo') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Limpiar', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
