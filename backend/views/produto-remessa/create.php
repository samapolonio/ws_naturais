<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ProdutoRemessa */

$this->title = 'Create Produto Remessa';
$this->params['breadcrumbs'][] = ['label' => 'Produto Remessas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="produto-remessa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
