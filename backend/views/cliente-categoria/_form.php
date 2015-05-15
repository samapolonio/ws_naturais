<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ClienteCategoria */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-categoria-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'clientes_id')->textInput() ?>

    <?= $form->field($model, 'categorias_id')->textInput() ?>

    <?= $form->field($model, 'dt_inclusao')->textInput() ?>

    <?= $form->field($model, 'dt_atualizacao')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
