<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pedido */

$this->title = $model->id_pedidos;
$this->params['breadcrumbs'][] = ['label' => 'Pedidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedido-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_pedidos], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_pedidos], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pedidos',
            'situacoes_pedido_id',
            'formas_pagto_id',
            'clientes_id',
            'usuarios_id',
            'tp_pedidos_id',
            'perc_desconto',
            'in_nf',
            'dt_situacao_atual',
            'vl_total',
            'vl_liquido',
            'dt_inclusao',
            'dt_atualizacao',
        ],
    ]) ?>

</div>
