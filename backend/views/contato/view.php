<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Contato */

$this->title = $model->id_contatos;
$this->params['breadcrumbs'][] = ['label' => 'Contatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contato-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_contatos' => $model->id_contatos, 'clientes_id' => $model->clientes_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_contatos' => $model->id_contatos, 'clientes_id' => $model->clientes_id], [
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
            'id_contatos',
            'clientes_id',
            'nome',
            'telefone',
            'email:email',
            'dt_inclusao',
            'dt_atualizacao',
        ],
    ]) ?>

</div>
