<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pedidos".
 *
 * @property integer $id_pedidos
 * @property integer $situacoes_pedido_id
 * @property integer $formas_pagto_id
 * @property integer $clientes_id
 * @property integer $usuarios_id
 * @property integer $tp_pedidos_id
 * @property string $perc_desconto
 * @property string $in_nf
 * @property string $dt_situacao_atual
 * @property string $vl_total
 * @property string $vl_liquido
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property SituacoesPedido $situacoesPedido
 * @property FormasPagto $formasPagto
 * @property Clientes $clientes
 * @property Usuarios $usuarios
 * @property TpPedidos $tpPedidos
 * @property ProdutosPedidos[] $produtosPedidos
 * @property Produtos[] $produtos
 */
class Pedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pedidos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['situacoes_pedido_id', 'formas_pagto_id', 'clientes_id', 'usuarios_id', 'tp_pedidos_id'], 'required'],
            [['situacoes_pedido_id', 'formas_pagto_id', 'clientes_id', 'usuarios_id', 'tp_pedidos_id'], 'integer'],
            [['perc_desconto', 'vl_total', 'vl_liquido'], 'number'],
            [['dt_situacao_atual', 'dt_inclusao', 'dt_atualizacao'], 'safe'],
            [['in_nf'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_pedidos' => 'Id Pedidos',
            'situacoes_pedido_id' => 'Situacoes Pedido ID',
            'formas_pagto_id' => 'Formas Pagto ID',
            'clientes_id' => 'Clientes ID',
            'usuarios_id' => 'Usuarios ID',
            'tp_pedidos_id' => 'Tp Pedidos ID',
            'perc_desconto' => 'Perc Desconto',
            'in_nf' => 'In Nf',
            'dt_situacao_atual' => 'Dt Situacao Atual',
            'vl_total' => 'Vl Total',
            'vl_liquido' => 'Vl Liquido',
            'dt_inclusao' => 'Dt Inclusao',
            'dt_atualizacao' => 'Dt Atualizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSituacoesPedido()
    {
        return $this->hasOne(SituacoesPedido::className(), ['id_situacoes_pedido' => 'situacoes_pedido_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormasPagto()
    {
        return $this->hasOne(FormasPagto::className(), ['id_formas_pagto' => 'formas_pagto_id']);
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
    public function getUsuarios()
    {
        return $this->hasOne(Usuarios::className(), ['id_usuarios' => 'usuarios_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTpPedidos()
    {
        return $this->hasOne(TpPedidos::className(), ['id_tp_pedidos' => 'tp_pedidos_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutosPedidos()
    {
        return $this->hasMany(ProdutosPedidos::className(), ['pedidos_id' => 'id_pedidos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produtos::className(), ['id_produtos' => 'produtos_id'])->viaTable('produtos_pedidos', ['pedidos_id' => 'id_pedidos']);
    }
}
