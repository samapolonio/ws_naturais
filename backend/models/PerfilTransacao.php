<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "perfis_transacoes".
 *
 * @property integer $transacoes_id
 * @property integer $perfis_id
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property Transacoes $transacoes
 * @property Perfis $perfis
 */
class PerfilTransacao extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perfis_transacoes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['transacoes_id', 'perfis_id'], 'required'],
            [['transacoes_id', 'perfis_id'], 'integer'],
            [['dt_inclusao', 'dt_atualizacao'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'transacoes_id' => 'Transacoes ID',
            'perfis_id' => 'Perfis ID',
            'dt_inclusao' => 'Dt Inclusao',
            'dt_atualizacao' => 'Dt Atualizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransacoes()
    {
        return $this->hasOne(Transacoes::className(), ['id_transacoes' => 'transacoes_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerfis()
    {
        return $this->hasOne(Perfis::className(), ['id_perfis' => 'perfis_id']);
    }
}
