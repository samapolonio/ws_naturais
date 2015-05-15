<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Uf */

$this->title = 'Atualizar UF: ' . ' ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'UF', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->id_uf]];
$this->params['breadcrumbs'][] = 'Atualizar';
?>
<div class="uf-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
