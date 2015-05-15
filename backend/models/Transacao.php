<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "transacoes".
 *
 * @property integer $id_transacoes
 * @property string $nome
 * @property string $descricao
 * @property string $url
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property PerfisTransacoes[] $perfisTransacoes
 * @property Perfis[] $perfis
 */
class Transacao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'transacoes';
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
            [['descricao'], 'string', 'max' => 100],
            [['url'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_transacoes' => 'Id Transacoes',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'url' => 'Url',
            'dt_inclusao' => 'Dt Inclusao',
            'dt_atualizacao' => 'Dt Atualizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerfisTransacoes()
    {
        return $this->hasMany(PerfisTransacoes::className(), ['transacoes_id' => 'id_transacoes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerfis()
    {
        return $this->hasMany(Perfis::className(), ['id_perfis' => 'perfis_id'])->viaTable('perfis_transacoes', ['transacoes_id' => 'id_transacoes']);
    }
}
