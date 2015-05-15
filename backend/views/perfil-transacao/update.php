<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\PerfilTransacao */

$this->title = 'Update Perfil Transacao: ' . ' ' . $model->transacoes_id;
$this->params['breadcrumbs'][] = ['label' => 'Perfil Transacaos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->transacoes_id, 'url' => ['view', 'transacoes_id' => $model->transacoes_id, 'perfis_id' => $model->perfis_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perfil-transacao-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
