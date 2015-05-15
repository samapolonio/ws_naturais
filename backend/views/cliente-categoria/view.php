<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ClienteCategoria */

$this->title = $model->clientes_id;
$this->params['breadcrumbs'][] = ['label' => 'Cliente Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-categoria-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'clientes_id' => $model->clientes_id, 'categorias_id' => $model->categorias_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'clientes_id' => $model->clientes_id, 'categorias_id' => $model->categorias_id], [
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
            'clientes_id',
            'categorias_id',
            'dt_inclusao',
            'dt_atualizacao',
        ],
    ]) ?>

</div>
