<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\BairroSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bairro-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_bairros') ?>

    <?= $form->field($model, 'cidades_id') ?>

    <?= $form->field($model, 'nome') ?>

    <?= $form->field($model, 'dt_inclusao') ?>

    <?= $form->field($model, 'dt_atualizacao') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
