<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SituacaoPedido */

$this->title = 'Create Situacao Pedido';
$this->params['breadcrumbs'][] = ['label' => 'Situacao Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="situacao-pedido-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
