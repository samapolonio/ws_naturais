<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "produtos_pedidos".
 *
 * @property integer $produtos_id
 * @property integer $pedidos_id
 * @property integer $quant
 * @property string $preco
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property Produtos $produtos
 * @property Pedidos $pedidos
 */
class ProdutoPedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produtos_pedidos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['produtos_id', 'pedidos_id'], 'required'],
            [['produtos_id', 'pedidos_id', 'quant'], 'integer'],
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
            'pedidos_id' => 'Pedidos ID',
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
    public function getPedidos()
    {
        return $this->hasOne(Pedidos::className(), ['id_pedidos' => 'pedidos_id']);
    }
}
