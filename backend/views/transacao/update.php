<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Transacao */

$this->title = 'Update Transacao: ' . ' ' . $model->id_transacoes;
$this->params['breadcrumbs'][] = ['label' => 'Transacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_transacoes, 'url' => ['view', 'id' => $model->id_transacoes]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="transacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
