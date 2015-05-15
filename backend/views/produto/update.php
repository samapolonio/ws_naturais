<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Produto */

$this->title = 'Update Produto: ' . ' ' . $model->id_produtos;
$this->params['breadcrumbs'][] = ['label' => 'Produtos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_produtos, 'url' => ['view', 'id' => $model->id_produtos]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="produto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
