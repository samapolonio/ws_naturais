<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Endereco */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="endereco-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'clientes_id')->textInput() ?>

    <?= $form->field($model, 'bairros_id')->textInput() ?>

    <?= $form->field($model, 'tp_logradouro')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'logradouro')->textInput(['maxlength' => 60]) ?>

    <?= $form->field($model, 'numero')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'complemento')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'cep')->textInput(['maxlength' => 9]) ?>

    <?= $form->field($model, 'latitude')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'longitude')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'dt_inclusao')->textInput() ?>

    <?= $form->field($model, 'dt_atualizacao')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
