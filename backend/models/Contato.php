<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contatos".
 *
 * @property integer $id_contatos
 * @property integer $clientes_id
 * @property string $nome
 * @property string $telefone
 * @property string $email
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property Clientes $clientes
 */
class Contato extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contatos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['clientes_id'], 'required'],
            [['clientes_id'], 'integer'],
            [['dt_inclusao', 'dt_atualizacao'], 'safe'],
            [['nome', 'telefone', 'email'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_contatos' => 'Id Contatos',
            'clientes_id' => 'Clientes ID',
            'nome' => 'Nome',
            'telefone' => 'Telefone',
            'email' => 'Email',
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
}
