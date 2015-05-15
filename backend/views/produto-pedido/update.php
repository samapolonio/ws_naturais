<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ProdutoPedido */

$this->title = 'Update Produto Pedido: ' . ' ' . $model->produtos_id;
$this->params['breadcrumbs'][] = ['label' => 'Produto Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->produtos_id, 'url' => ['view', 'produtos_id' => $model->produtos_id, 'pedidos_id' => $model->pedidos_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="produto-pedido-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
