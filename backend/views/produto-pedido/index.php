<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ProdutoPedidoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Produto Pedidos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-pedido-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Produto Pedido', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'produtos_id',
            'pedidos_id',
            'quant',
            'preco',
            'dt_inclusao',
            // 'dt_atualizacao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
