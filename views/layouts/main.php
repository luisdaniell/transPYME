<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\Dropdown;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>


<div class="wrap">
    <?php
    NavBar::begin([
       'brandLabel' => false,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],

    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => [


            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Sobre este sitio', 'url' => ['/site/about']],
            ['label' => 'Contacto', 'url' => ['/site/contact']],
            
            ['label' => 'Empresas PYME', 'url' => ['/empresa-pyme/index'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->usu_tipo == 0],
            ['label' => 'Servicios', 'url' => ['/servicio/index'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->usu_tipo == 0],
            ['label' => 'Roles de sistema', 'url' => ['/rol/index'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->usu_tipo == 0],

            ['label' => 'Vehículos', 'url' => ['/vehiculo/index'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->usu_tipo == 1],
            ['label' => 'Choferes', 'url' => ['/chofer/index'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->usu_tipo == 1],
            ['label' => 'Carros', 'url' => ['/carro/index'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->usu_tipo == 1],
            ['label' => 'Neumáticos', 'url' => ['/neumatico/index'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->usu_tipo == 1],
            ['label' => 'Clientes', 'url' => ['/site/default'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->usu_tipo == 1],
            ['label' => 'Proveedores', 'url' => ['/site/default'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->usu_tipo == 1],
            ['label' => 'Viajes', 'url' => ['/site/default'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->usu_tipo == 1],
            ['label' => 'GPS', 'url' => ['/site/default'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->usu_tipo == 1],
            ['label' => 'Financias', 'url' => ['/site/default'], 'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->usu_tipo == 1],
            Yii::$app->user->isGuest ?
                ['label' => 'Ingresar', 'url' => ['/site/login']] :
                [
                    'label' => 'Salir (' . Yii::$app->user->identity->usu_email . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ],
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
