<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PedidoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedido-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_pedidos') ?>

    <?= $form->field($model, 'situacoes_pedido_id') ?>

    <?= $form->field($model, 'formas_pagto_id') ?>

    <?= $form->field($model, 'clientes_id') ?>

    <?= $form->field($model, 'usuarios_id') ?>

    <?php // echo $form->field($model, 'tp_pedidos_id') ?>

    <?php // echo $form->field($model, 'perc_desconto') ?>

    <?php // echo $form->field($model, 'in_nf') ?>

    <?php // echo $form->field($model, 'dt_situacao_atual') ?>

    <?php // echo $form->field($model, 'vl_total') ?>

    <?php // echo $form->field($model, 'vl_liquido') ?>

    <?php // echo $form->field($model, 'dt_inclusao') ?>

    <?php // echo $form->field($model, 'dt_atualizacao') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
