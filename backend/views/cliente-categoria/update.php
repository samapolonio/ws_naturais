<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ClienteCategoria */

$this->title = 'Update Cliente Categoria: ' . ' ' . $model->clientes_id;
$this->params['breadcrumbs'][] = ['label' => 'Cliente Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->clientes_id, 'url' => ['view', 'clientes_id' => $model->clientes_id, 'categorias_id' => $model->categorias_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cliente-categoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
