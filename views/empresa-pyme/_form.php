<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\EmpresaPyme */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empresa-pyme-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'emp_rut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_giro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_rubro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_telefono')->textInput() ?>

    <?= $form->field($model, 'emp_direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emp_descripcion')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
