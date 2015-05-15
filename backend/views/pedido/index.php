<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PedidoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pedidos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pedido-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pedido', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pedidos',
            'situacoes_pedido_id',
            'formas_pagto_id',
            'clientes_id',
            'usuarios_id',
            // 'tp_pedidos_id',
            // 'perc_desconto',
            // 'in_nf',
            // 'dt_situacao_atual',
            // 'vl_total',
            // 'vl_liquido',
            // 'dt_inclusao',
            // 'dt_atualizacao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
