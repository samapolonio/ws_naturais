<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\PerfilTransacaoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perfil Transacaos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-transacao-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Perfil Transacao', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'transacoes_id',
            'perfis_id',
            'dt_inclusao',
            'dt_atualizacao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
