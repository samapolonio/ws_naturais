<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Produto */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'imagem')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'preco_atual')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'estoque_critico')->textInput() ?>

    <?= $form->field($model, 'estoque_virtual')->textInput() ?>

    <?= $form->field($model, 'estoque_fisico')->textInput() ?>

    <?= $form->field($model, 'peso')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'qtd_caixa')->textInput() ?>

    <?= $form->field($model, 'dt_inclusao')->textInput() ?>

    <?= $form->field($model, 'dt_atualizacao')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
