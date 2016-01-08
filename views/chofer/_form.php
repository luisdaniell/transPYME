<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Chofer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chofer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cho_rut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cho_num_licencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cho_primer_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cho_segundo_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cho_apell_paterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cho_apell_materno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cho_fecha_nac')->textInput() ?>

    <?= $form->field($model, 'cho_direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cho_telefono')->textInput() ?>

    <?= $form->field($model, 'cho_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cho_sueldo')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Ingresar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
