<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ProdutoPedido */

$this->title = 'Create Produto Pedido';
$this->params['breadcrumbs'][] = ['label' => 'Produto Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-pedido-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
