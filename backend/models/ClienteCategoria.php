<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "clientes_categorias".
 *
 * @property integer $clientes_id
 * @property integer $categorias_id
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property Clientes $clientes
 * @property Categorias $categorias
 */
class ClienteCategoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clientes_categorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['clientes_id', 'categorias_id'], 'required'],
            [['clientes_id', 'categorias_id'], 'integer'],
            [['dt_inclusao', 'dt_atualizacao'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'clientes_id' => 'Clientes ID',
            'categorias_id' => 'Categorias ID',
            'dt_inclusao' => 'Dt Inclusao',
            'dt_atualizacao' => 'Dt Atualizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasOne(Clientes::className(), ['id_clientes' => 'clientes_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategorias()
    {
        return $this->hasOne(Categorias::className(), ['id_categorias' => 'categorias_id']);
    }
}
