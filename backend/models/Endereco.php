<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "enderecos".
 *
 * @property integer $id_enderecos
 * @property integer $clientes_id
 * @property integer $bairros_id
 * @property string $tp_logradouro
 * @property string $logradouro
 * @property string $numero
 * @property string $complemento
 * @property string $cep
 * @property string $latitude
 * @property string $longitude
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property Clientes $clientes
 * @property Bairros $bairros
 */
class Endereco extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'enderecos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['clientes_id', 'bairros_id'], 'required'],
            [['clientes_id', 'bairros_id'], 'integer'],
            [['dt_inclusao', 'dt_atualizacao'], 'safe'],
            [['tp_logradouro'], 'string', 'max' => 20],
            [['logradouro'], 'string', 'max' => 60],
            [['numero'], 'string', 'max' => 10],
            [['complemento'], 'string', 'max' => 50],
            [['cep'], 'string', 'max' => 9],
            [['latitude', 'longitude'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_enderecos' => 'Id Enderecos',
            'clientes_id' => 'Clientes ID',
            'bairros_id' => 'Bairros ID',
            'tp_logradouro' => 'Tp Logradouro',
            'logradouro' => 'Logradouro',
            'numero' => 'Numero',
            'complemento' => 'Complemento',
            'cep' => 'Cep',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
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
    public function getBairros()
    {
        return $this->hasOne(Bairros::className(), ['id_bairros' => 'bairros_id']);
    }
}
