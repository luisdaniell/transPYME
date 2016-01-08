<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Servicio;
use app\models\Rol;

/* @var $this yii\web\View */
/* @var $model app\models\EmpresaPyme */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empresa-pyme-form">

    <?php $form = ActiveForm::begin(); ?>

    <h3>Datos de la empresa</h3><br>

    <?= $form->field($servicio, 'ser_codigo')
         ->dropDownList(
            ArrayHelper::map(Servicio::find()->all(), 'ser_codigo', 'ser_nombre')
            )->label('Tipo de servicio')?>

    <?= $form->field($empresa, 'emp_rut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($empresa, 'emp_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($empresa, 'emp_giro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($empresa, 'emp_rubro')->textInput(['maxlength' => true]) ?>

    <?= $form->field($empresa, 'emp_telefono')->textInput() ?>

    <?= $form->field($empresa, 'emp_direccion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($empresa, 'emp_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($empresa, 'emp_descripcion')->textInput(['maxlength' => true]) ?>

    <h3>Datos del representante de la empresa</h3><br>

    <?= $form->field($usuario, 'usu_rut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($usuario, 'usu_nombres')->textInput(['maxlength' => true]) ?>

    <?= $form->field($usuario, 'usu_apell_paterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($usuario, 'usu_apell_materno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($usuario, 'usu_telefono')->textInput(['maxlength' => true]) ?>

    <?= $form->field($usuario, 'usu_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($usuario, 'rol_codigo')
         ->dropDownList(
            ArrayHelper::map(Rol::find()->all(), 'rol_codigo', 'rol_nombre')
            )->label('Rol dentro del sistema')?>

    <div class="form-group">
        <?= Html::submitButton($empresa->isNewRecord ? Yii::t('app', 'Registrar y crear cuenta') : Yii::t('app', 'Update'), ['class' => $empresa->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>