<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\FormaPagamento */

$this->title = 'Update Forma Pagamento: ' . ' ' . $model->id_formas_pagto;
$this->params['breadcrumbs'][] = ['label' => 'Forma Pagamentos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_formas_pagto, 'url' => ['view', 'id' => $model->id_formas_pagto]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="forma-pagamento-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
