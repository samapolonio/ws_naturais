<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Pedido;

/**
 * PedidoSearch represents the model behind the search form about `backend\models\Pedido`.
 */
class PedidoSearch extends Pedido
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pedidos', 'situacoes_pedido_id', 'formas_pagto_id', 'clientes_id', 'usuarios_id', 'tp_pedidos_id'], 'integer'],
            [['perc_desconto', 'vl_total', 'vl_liquido'], 'number'],
            [['in_nf', 'dt_situacao_atual', 'dt_inclusao', 'dt_atualizacao'], 'safe'],
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
        $query = Pedido::find();

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
            'id_pedidos' => $this->id_pedidos,
            'situacoes_pedido_id' => $this->situacoes_pedido_id,
            'formas_pagto_id' => $this->formas_pagto_id,
            'clientes_id' => $this->clientes_id,
            'usuarios_id' => $this->usuarios_id,
            'tp_pedidos_id' => $this->tp_pedidos_id,
            'perc_desconto' => $this->perc_desconto,
            'dt_situacao_atual' => $this->dt_situacao_atual,
            'vl_total' => $this->vl_total,
            'vl_liquido' => $this->vl_liquido,
            'dt_inclusao' => $this->dt_inclusao,
            'dt_atualizacao' => $this->dt_atualizacao,
        ]);

        $query->andFilterWhere(['like', 'in_nf', $this->in_nf]);

        return $dataProvider;
    }
}
