<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\EnderecoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Enderecos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="endereco-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Endereco', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_enderecos',
            'clientes_id',
            'bairros_id',
            'tp_logradouro',
            'logradouro',
            // 'numero',
            // 'complemento',
            // 'cep',
            // 'latitude',
            // 'longitude',
            // 'dt_inclusao',
            // 'dt_atualizacao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
