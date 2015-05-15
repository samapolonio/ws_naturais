<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Endereco */

$this->title = $model->id_enderecos;
$this->params['breadcrumbs'][] = ['label' => 'Enderecos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="endereco-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_enderecos' => $model->id_enderecos, 'clientes_id' => $model->clientes_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_enderecos' => $model->id_enderecos, 'clientes_id' => $model->clientes_id], [
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
            'id_enderecos',
            'clientes_id',
            'bairros_id',
            'tp_logradouro',
            'logradouro',
            'numero',
            'complemento',
            'cep',
            'latitude',
            'longitude',
            'dt_inclusao',
            'dt_atualizacao',
        ],
    ]) ?>

</div>
