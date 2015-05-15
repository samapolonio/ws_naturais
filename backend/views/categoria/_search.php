<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\CategoriaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="categoria-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_categorias') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'descricao') ?>

    <?= $form->field($model, 'icone') ?>

    <?= $form->field($model, 'limite_inferior') ?>

    <?php // echo $form->field($model, 'limite_superior') ?>

    <?php // echo $form->field($model, 'qtd_dias') ?>

    <?php // echo $form->field($model, 'dt_inclusao') ?>

    <?php // echo $form->field($model, 'dt_atualizacao') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
