<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Neumatico */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="neumatico-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'neu_serie')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'neu_marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'neu_valor_compra')->textInput() ?>

    <?= $form->field($model, 'neu_fecha_compra')->textInput() ?>

    <?= $form->field($model, 'neu_ancho')->textInput() ?>

    <?= $form->field($model, 'neu_altura')->textInput() ?>

    <?= $form->field($model, 'neu_diametro')->textInput() ?>

    <?= $form->field($model, 'neu_km_acumulados')->textInput() ?>

    <?= $form->field($model, 'neu_observaciones')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'neu_imagen')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Ingresar') : Yii::t('app', 'Actualizar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
