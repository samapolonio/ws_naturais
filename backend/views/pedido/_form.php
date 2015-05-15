<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pedido */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pedido-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'situacoes_pedido_id')->textInput() ?>

    <?= $form->field($model, 'formas_pagto_id')->textInput() ?>

    <?= $form->field($model, 'clientes_id')->textInput() ?>

    <?= $form->field($model, 'usuarios_id')->textInput() ?>

    <?= $form->field($model, 'tp_pedidos_id')->textInput() ?>

    <?= $form->field($model, 'perc_desconto')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'in_nf')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'dt_situacao_atual')->textInput() ?>

    <?= $form->field($model, 'vl_total')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'vl_liquido')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'dt_inclusao')->textInput() ?>

    <?= $form->field($model, 'dt_atualizacao')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
