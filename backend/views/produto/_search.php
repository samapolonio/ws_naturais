<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProdutoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_produtos') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'imagem') ?>

    <?= $form->field($model, 'preco_atual') ?>

    <?= $form->field($model, 'estoque_critico') ?>

    <?php // echo $form->field($model, 'estoque_virtual') ?>

    <?php // echo $form->field($model, 'estoque_fisico') ?>

    <?php // echo $form->field($model, 'peso') ?>

    <?php // echo $form->field($model, 'qtd_caixa') ?>

    <?php // echo $form->field($model, 'dt_inclusao') ?>

    <?php // echo $form->field($model, 'dt_atualizacao') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
