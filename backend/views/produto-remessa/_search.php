<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProdutoRemessaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-remessa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'produtos_id') ?>

    <?= $form->field($model, 'remessas_id') ?>

    <?= $form->field($model, 'quant') ?>

    <?= $form->field($model, 'preco') ?>

    <?= $form->field($model, 'dt_inclusao') ?>

    <?php // echo $form->field($model, 'dt_atualizacao') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
