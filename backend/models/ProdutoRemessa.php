<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "produtos_remessas".
 *
 * @property integer $produtos_id
 * @property integer $remessas_id
 * @property integer $quant
 * @property string $preco
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property Produtos $produtos
 * @property Remessas $remessas
 */
class ProdutoRemessa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produtos_remessas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['produtos_id', 'remessas_id'], 'required'],
            [['produtos_id', 'remessas_id', 'quant'], 'integer'],
            [['preco'], 'number'],
            [['dt_inclusao', 'dt_atualizacao'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'produtos_id' => 'Produtos ID',
            'remessas_id' => 'Remessas ID',
            'quant' => 'Quant',
            'preco' => 'Preco',
            'dt_inclusao' => 'Dt Inclusao',
            'dt_atualizacao' => 'Dt Atualizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasOne(Produtos::className(), ['id_produtos' => 'produtos_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRemessas()
    {
        return $this->hasOne(Remessas::className(), ['id_remessas' => 'remessas_id']);
    }
}
