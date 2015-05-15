<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Contato */

$this->title = 'Update Contato: ' . ' ' . $model->id_contatos;
$this->params['breadcrumbs'][] = ['label' => 'Contatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_contatos, 'url' => ['view', 'id_contatos' => $model->id_contatos, 'clientes_id' => $model->clientes_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contato-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
