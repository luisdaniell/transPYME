<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Carro */

$this->title = 'Ingresar nuevo carro';
$this->params['breadcrumbs'][] = ['label' => 'Carros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carro-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
