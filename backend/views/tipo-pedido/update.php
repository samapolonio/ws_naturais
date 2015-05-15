<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\TipoPedido */

$this->title = 'Update Tipo Pedido: ' . ' ' . $model->id_tp_pedidos;
$this->params['breadcrumbs'][] = ['label' => 'Tipo Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_tp_pedidos, 'url' => ['view', 'id' => $model->id_tp_pedidos]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipo-pedido-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
