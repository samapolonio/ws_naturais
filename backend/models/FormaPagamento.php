<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "formas_pagto".
 *
 * @property integer $id_formas_pagto
 * @property string $nome
 * @property string $descricao
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property Pedidos[] $pedidos
 */
class FormaPagamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'formas_pagto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dt_inclusao', 'dt_atualizacao'], 'safe'],
            [['nome'], 'string', 'max' => 30],
            [['descricao'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_formas_pagto' => 'Id Formas Pagto',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'dt_inclusao' => 'Dt Inclusao',
            'dt_atualizacao' => 'Dt Atualizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedidos::className(), ['formas_pagto_id' => 'id_formas_pagto']);
    }
}
