<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Bairro */

$this->title = 'Update Bairro: ' . ' ' . $model->id_bairros;
$this->params['breadcrumbs'][] = ['label' => 'Bairros', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_bairros, 'url' => ['view', 'id' => $model->id_bairros]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bairro-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
