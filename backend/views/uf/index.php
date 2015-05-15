<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UfSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'UF';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uf-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
	<p>
        Para pesquisar, informe <b>Sigla</b> ou <b>Nome</b> e pressione ENTER <br>
    </p>
	<p></p>
    <p>
        <?= Html::a('Incluir UF', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'sigla',
            'nome',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
