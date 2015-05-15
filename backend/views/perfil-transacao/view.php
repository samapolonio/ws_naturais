<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\PerfilTransacao */

$this->title = $model->transacoes_id;
$this->params['breadcrumbs'][] = ['label' => 'Perfil Transacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perfil-transacao-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'transacoes_id' => $model->transacoes_id, 'perfis_id' => $model->perfis_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'transacoes_id' => $model->transacoes_id, 'perfis_id' => $model->perfis_id], [
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
            'transacoes_id',
            'perfis_id',
            'dt_inclusao',
            'dt_atualizacao',
        ],
    ]) ?>

</div>
