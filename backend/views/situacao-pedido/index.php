<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SituacaoPedidoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Situacao Pedidos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="situacao-pedido-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Situacao Pedido', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_situacoes_pedido',
            'nome',
            'descricao',
            'dt_inclusao',
            'dt_atualizacao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
