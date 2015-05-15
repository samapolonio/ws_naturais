<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ProdutoRemessa */

$this->title = $model->produtos_id;
$this->params['breadcrumbs'][] = ['label' => 'Produto Remessas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-remessa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'produtos_id' => $model->produtos_id, 'remessas_id' => $model->remessas_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'produtos_id' => $model->produtos_id, 'remessas_id' => $model->remessas_id], [
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
            'produtos_id',
            'remessas_id',
            'quant',
            'preco',
            'dt_inclusao',
            'dt_atualizacao',
        ],
    ]) ?>

</div>
