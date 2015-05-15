<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "perfis".
 *
 * @property integer $id_perfis
 * @property string $nome
 * @property string $descricao
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property PerfisTransacoes[] $perfisTransacoes
 * @property Transacoes[] $transacoes
 * @property Usuarios[] $usuarios
 */
class Perfil extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perfis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nome'], 'required'],
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
            'id_perfis' => 'Id Perfis',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'dt_inclusao' => 'Dt Inclusao',
            'dt_atualizacao' => 'Dt Atualizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerfisTransacoes()
    {
        return $this->hasMany(PerfisTransacoes::className(), ['perfis_id' => 'id_perfis']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransacoes()
    {
        return $this->hasMany(Transacoes::className(), ['id_transacoes' => 'transacoes_id'])->viaTable('perfis_transacoes', ['perfis_id' => 'id_perfis']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::className(), ['perfis_id' => 'id_perfis']);
    }
}
