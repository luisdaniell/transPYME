<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use app\models\Usuario;

/* @var $this yii\web\View */
/* @var $model app\models\EmpresaPyme */

$this->title = $model->emp_nombre;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Empresa Pymes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="empresa-pyme-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->emp_rut], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->emp_rut], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'emp_rut',
            'emp_nombre',
            'emp_giro',
            'emp_rubro',
            'emp_telefono',
            'emp_direccion',
            'emp_email:email',
            'emp_descripcion',
        ],
    ]) ?>

<h3>Datos del representante de <?= $model->emp_nombre ?>:</h3><br>

        <?= DetailView::widget([
        'model' => $usuario,
        'attributes' => [
            'usu_rut',
            'usu_nombres',
            'usu_apell_paterno',
            'usu_apell_materno',
            'usu_telefono',
            'usu_email:email'
        ],
    ]) ?>




</div>
