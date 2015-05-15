<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\SituacaoPedido */

$this->title = 'Update Situacao Pedido: ' . ' ' . $model->id_situacoes_pedido;
$this->params['breadcrumbs'][] = ['label' => 'Situacao Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_situacoes_pedido, 'url' => ['view', 'id' => $model->id_situacoes_pedido]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="situacao-pedido-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
