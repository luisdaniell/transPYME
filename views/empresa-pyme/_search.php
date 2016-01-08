<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmpresaPymeSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empresa-pyme-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'emp_rut') ?>

    <?= $form->field($model, 'emp_nombre') ?>

    <?= $form->field($model, 'emp_giro') ?>

    <?= $form->field($model, 'emp_rubro') ?>

    <?= $form->field($model, 'emp_telefono') ?>

    <?php // echo $form->field($model, 'emp_direccion') ?>

    <?php // echo $form->field($model, 'emp_email') ?>

    <?php // echo $form->field($model, 'emp_descripcion') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Buscar'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Limpiar'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
