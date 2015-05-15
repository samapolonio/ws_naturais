<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ClienteCategoria */

$this->title = 'Create Cliente Categoria';
$this->params['breadcrumbs'][] = ['label' => 'Cliente Categorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-categoria-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
