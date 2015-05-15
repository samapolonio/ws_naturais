<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Remessa */

$this->title = 'Create Remessa';
$this->params['breadcrumbs'][] = ['label' => 'Remessas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="remessa-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
