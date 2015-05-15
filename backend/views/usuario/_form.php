<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'perfis_id')->textInput() ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'senha')->textInput(['maxlength' => 10]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'cargo')->textInput(['maxlength' => 30]) ?>

    <?= $form->field($model, 'dt_inclusao')->textInput() ?>

    <?= $form->field($model, 'dt_atualizacao')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
