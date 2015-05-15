<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Remessa */

$this->title = 'Update Remessa: ' . ' ' . $model->id_remessas;
$this->params['breadcrumbs'][] = ['label' => 'Remessas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_remessas, 'url' => ['view', 'id' => $model->id_remessas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="remessa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
