<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UsuarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_usuarios') ?>

    <?= $form->field($model, 'perfis_id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'senha') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'cargo') ?>

    <?php // echo $form->field($model, 'dt_inclusao') ?>

    <?php // echo $form->field($model, 'dt_atualizacao') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
