<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Cliente */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cnpj')->textInput(['maxlength' => 20]) ?>

    <?= $form->field($model, 'inscricao_estadual')->textInput(['maxlength' => 45]) ?>

    <?= $form->field($model, 'razao_social')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'nome_fantasia')->textInput(['maxlength' => 200]) ?>

    <?= $form->field($model, 'situacao')->textInput(['maxlength' => 1]) ?>

    <?= $form->field($model, 'dt_inclusao')->textInput() ?>

    <?= $form->field($model, 'dt_atualizacao')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
