<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Uf */

$this->title = 'Incluir UF';
$this->params['breadcrumbs'][] = ['label' => 'UF', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uf-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
