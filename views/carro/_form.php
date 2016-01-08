<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Carro */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="carro-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'car_patente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_num_ejes')->textInput() ?>

    <?= $form->field($model, 'car_tipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'car_fecha_compra')->textInput() ?>

    <?= $form->field($model, 'car_valor_compra')->textInput() ?>

    <?= $form->field($model, 'car_observacion')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Ingresar' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
