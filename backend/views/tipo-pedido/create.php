<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\TipoPedido */

$this->title = 'Create Tipo Pedido';
$this->params['breadcrumbs'][] = ['label' => 'Tipo Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipo-pedido-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
