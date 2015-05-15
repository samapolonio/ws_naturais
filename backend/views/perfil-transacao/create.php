<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\PerfilTransacao */

$this->title = 'Create Perfil Transacao';
$this->params['breadcrumbs'][] = ['label' => 'Perfil Transacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-transacao-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
