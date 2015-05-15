<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Categoria */

$this->title = 'Update Categoria: ' . ' ' . $model->id_categorias;
$this->params['breadcrumbs'][] = ['label' => 'Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_categorias, 'url' => ['view', 'id' => $model->id_categorias]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="categoria-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
