<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bairros".
 *
 * @property integer $id_bairros
 * @property integer $cidades_id
 * @property string $nome
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property Cidades $cidades
 * @property Enderecos[] $enderecos
 */
class Bairro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bairros';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_bairros', 'cidades_id'], 'required'],
            [['id_bairros', 'cidades_id'], 'integer'],
            [['dt_inclusao', 'dt_atualizacao'], 'safe'],
            [['nome'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_bairros' => 'Id Bairros',
            'cidades_id' => 'Cidades ID',
            'nome' => 'Nome',
            'dt_inclusao' => 'Dt Inclusao',
            'dt_atualizacao' => 'Dt Atualizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCidades()
    {
        return $this->hasOne(Cidades::className(), ['id_cidades' => 'cidades_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnderecos()
    {
        return $this->hasMany(Enderecos::className(), ['bairros_id' => 'id_bairros']);
    }
}
