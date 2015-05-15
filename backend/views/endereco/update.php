<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Endereco */

$this->title = 'Update Endereco: ' . ' ' . $model->id_enderecos;
$this->params['breadcrumbs'][] = ['label' => 'Enderecos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_enderecos, 'url' => ['view', 'id_enderecos' => $model->id_enderecos, 'clientes_id' => $model->clientes_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="endereco-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
