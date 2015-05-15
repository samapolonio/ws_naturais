<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ClienteCategoriaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cliente-categoria-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'clientes_id') ?>

    <?= $form->field($model, 'categorias_id') ?>

    <?= $form->field($model, 'dt_inclusao') ?>

    <?= $form->field($model, 'dt_atualizacao') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
