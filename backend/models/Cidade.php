<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cidades".
 *
 * @property integer $id_cidades
 * @property integer $uf_id
 * @property string $nome
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property Bairros[] $bairros
 * @property Uf $uf
 */
class Cidade extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cidades';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uf_id', 'nome'], 'required'],
            [['uf_id'], 'integer'],
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
            'id_cidades' => 'Id Cidades',
            'uf_id' => 'Uf ID',
            'nome' => 'Nome',
            'dt_inclusao' => 'Dt Inclusao',
            'dt_atualizacao' => 'Dt Atualizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBairros()
    {
        return $this->hasMany(Bairros::className(), ['cidades_id' => 'id_cidades']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUf()
    {
        return $this->hasOne(Uf::className(), ['id_uf' => 'uf_id']);
    }
}
