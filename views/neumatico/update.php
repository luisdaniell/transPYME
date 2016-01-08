<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Neumatico */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Neumatico',
]) . ' ' . $model->neu_serie;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Neumáticos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->neu_serie, 'url' => ['view', 'id' => $model->neu_serie]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Actualizar');
?>
<div class="neumatico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
