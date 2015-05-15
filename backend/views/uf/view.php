<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Uf */

$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'UF', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uf-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Atualizar', ['update', 'id' => $model->id_uf], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Apagar', ['delete', 'id' => $model->id_uf], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Tem certeza que deseja apagar este item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'sigla',
            'nome',
            'dt_inclusao',
            'dt_atualizacao',
        ],
    ]) ?>

</div>
