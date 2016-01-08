<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\EmpresaPyme */

$this->title = Yii::t('app', 'Crear nueva cuenta de servicio');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Empresas PYME'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empresa-pyme-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form_create', [
        'empresa' => $empresa, 'servicio' => $servicio, 'usuario' => $usuario
    ]) ?>

</div>
