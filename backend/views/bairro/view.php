<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Bairro */

$this->title = $model->id_bairros;
$this->params['breadcrumbs'][] = ['label' => 'Bairros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bairro-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_bairros], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_bairros], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_bairros',
            'cidades_id',
            'nome',
            'dt_inclusao',
            'dt_atualizacao',
        ],
    ]) ?>

</div>
