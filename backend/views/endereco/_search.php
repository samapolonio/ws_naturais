<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\EnderecoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="endereco-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_enderecos') ?>

    <?= $form->field($model, 'clientes_id') ?>

    <?= $form->field($model, 'bairros_id') ?>

    <?= $form->field($model, 'tp_logradouro') ?>

    <?= $form->field($model, 'logradouro') ?>

    <?php // echo $form->field($model, 'numero') ?>

    <?php // echo $form->field($model, 'complemento') ?>

    <?php // echo $form->field($model, 'cep') ?>

    <?php // echo $form->field($model, 'latitude') ?>

    <?php // echo $form->field($model, 'longitude') ?>

    <?php // echo $form->field($model, 'dt_inclusao') ?>

    <?php // echo $form->field($model, 'dt_atualizacao') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
