<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property integer $id_usuarios
 * @property integer $perfis_id
 * @property string $nome
 * @property string $senha
 * @property string $email
 * @property string $cargo
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property Pedidos[] $pedidos
 * @property Perfis $perfis
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['perfis_id'], 'required'],
            [['perfis_id'], 'integer'],
            [['dt_inclusao', 'dt_atualizacao'], 'safe'],
            [['nome', 'email'], 'string', 'max' => 100],
            [['senha'], 'string', 'max' => 10],
            [['cargo'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_usuarios' => 'Id Usuarios',
            'perfis_id' => 'Perfis ID',
            'nome' => 'Nome',
            'senha' => 'Senha',
            'email' => 'Email',
            'cargo' => 'Cargo',
            'dt_inclusao' => 'Dt Inclusao',
            'dt_atualizacao' => 'Dt Atualizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedidos::className(), ['usuarios_id' => 'id_usuarios']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerfis()
    {
        return $this->hasOne(Perfis::className(), ['id_perfis' => 'perfis_id']);
    }
}
