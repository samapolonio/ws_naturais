<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ProdutoRemessa */

$this->title = 'Update Produto Remessa: ' . ' ' . $model->produtos_id;
$this->params['breadcrumbs'][] = ['label' => 'Produto Remessas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->produtos_id, 'url' => ['view', 'produtos_id' => $model->produtos_id, 'remessas_id' => $model->remessas_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="produto-remessa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
