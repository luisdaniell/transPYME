<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Vehiculo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vehiculo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'veh_patente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'veh_tipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'veh_marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'veh_color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'veh_fecha_compra')->textInput() ?>

    <?= $form->field($model, 'veh_km_compra')->textInput() ?>

    <?= $form->field($model, 'veh_valor_compra')->textInput() ?>

    <?= $form->field($model, 'veh_max_carga')->textInput() ?>

    <?= $form->field($model, 'veh_observaciones')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'veh_carter')->textInput() ?>

    <?= $form->field($model, 'veh_caja')->textInput() ?>

    <?= $form->field($model, 'veh_diferencial')->textInput() ?>

    <?= $form->field($model, 'veh_num_motor')->textInput() ?>

    <?= $form->field($model, 'veh_num_chasis')->textInput() ?>

    <?= $form->field($model, 'veh_num_ejes')->textInput() ?>

    <?= $form->field($model, 'veh_gps_cod')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Ingresar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
