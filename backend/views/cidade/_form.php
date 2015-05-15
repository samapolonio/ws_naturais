<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Cidade */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cidade-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uf_id')->textInput() ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'dt_inclusao')->textInput() ?>

    <?= $form->field($model, 'dt_atualizacao')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
