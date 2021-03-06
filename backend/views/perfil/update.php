<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Perfil */

$this->title = 'Update Perfil: ' . ' ' . $model->id_perfis;
$this->params['breadcrumbs'][] = ['label' => 'Perfils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_perfis, 'url' => ['view', 'id' => $model->id_perfis]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="perfil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
