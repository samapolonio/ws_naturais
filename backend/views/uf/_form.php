<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Uf */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uf-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'sigla')->textInput(['maxlength' => 2]) ?>

    <?= $form->field($model, 'nome')->textInput(['maxlength' => 20]) ?>

    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Incluir' : 'Atualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
