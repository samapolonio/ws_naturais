<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ProdutoPedido;

/**
 * ProdutoPedidoSearch represents the model behind the search form about `backend\models\ProdutoPedido`.
 */
class ProdutoPedidoSearch extends ProdutoPedido
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['produtos_id', 'pedidos_id', 'quant'], 'integer'],
            [['preco'], 'number'],
            [['dt_inclusao', 'dt_atualizacao'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ProdutoPedido::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'produtos_id' => $this->produtos_id,
            'pedidos_id' => $this->pedidos_id,
            'quant' => $this->quant,
            'preco' => $this->preco,
            'dt_inclusao' => $this->dt_inclusao,
            'dt_atualizacao' => $this->dt_atualizacao,
        ]);

        return $dataProvider;
    }
}
