<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "produtos".
 *
 * @property integer $id_produtos
 * @property string $nome
 * @property string $imagem
 * @property string $preco_atual
 * @property integer $estoque_critico
 * @property integer $estoque_virtual
 * @property integer $estoque_fisico
 * @property string $peso
 * @property integer $qtd_caixa
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property HProdutos[] $hProdutos
 * @property ProdutosPedidos[] $produtosPedidos
 * @property Pedidos[] $pedidos
 * @property ProdutosRemessas[] $produtosRemessas
 * @property Remessas[] $remessas
 */
class Produto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'produtos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['preco_atual', 'peso'], 'number'],
            [['estoque_critico', 'estoque_virtual', 'estoque_fisico', 'qtd_caixa'], 'integer'],
            [['dt_inclusao', 'dt_atualizacao'], 'safe'],
            [['nome', 'imagem'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_produtos' => 'Id Produtos',
            'nome' => 'Nome',
            'imagem' => 'Imagem',
            'preco_atual' => 'Preco Atual',
            'estoque_critico' => 'Estoque Critico',
            'estoque_virtual' => 'Estoque Virtual',
            'estoque_fisico' => 'Estoque Fisico',
            'peso' => 'Peso',
            'qtd_caixa' => 'Qtd Caixa',
            'dt_inclusao' => 'Dt Inclusao',
            'dt_atualizacao' => 'Dt Atualizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHProdutos()
    {
        return $this->hasMany(HProdutos::className(), ['produtos_id' => 'id_produtos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutosPedidos()
    {
        return $this->hasMany(ProdutosPedidos::className(), ['produtos_id' => 'id_produtos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedidos::className(), ['id_pedidos' => 'pedidos_id'])->viaTable('produtos_pedidos', ['produtos_id' => 'id_produtos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutosRemessas()
    {
        return $this->hasMany(ProdutosRemessas::className(), ['produtos_id' => 'id_produtos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRemessas()
    {
        return $this->hasMany(Remessas::className(), ['id_remessas' => 'remessas_id'])->viaTable('produtos_remessas', ['produtos_id' => 'id_produtos']);
    }
}
