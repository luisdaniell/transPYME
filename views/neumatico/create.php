<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Neumatico */

$this->title = Yii::t('app', 'Registrar nuevo neumático');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Neumáticos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="neumatico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
