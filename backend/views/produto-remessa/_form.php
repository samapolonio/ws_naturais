<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProdutoRemessa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="produto-remessa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'produtos_id')->textInput() ?>

    <?= $form->field($model, 'remessas_id')->textInput() ?>

    <?= $form->field($model, 'quant')->textInput() ?>

    <?= $form->field($model, 'preco')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'dt_inclusao')->textInput() ?>

    <?= $form->field($model, 'dt_atualizacao')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
