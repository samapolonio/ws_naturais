<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\FormaPagamento;

/**
 * FormaPagamentoSearch represents the model behind the search form about `backend\models\FormaPagamento`.
 */
class FormaPagamentoSearch extends FormaPagamento
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_formas_pagto'], 'integer'],
            [['nome', 'descricao', 'dt_inclusao', 'dt_atualizacao'], 'safe'],
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
        $query = FormaPagamento::find();

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
            'id_formas_pagto' => $this->id_formas_pagto,
            'dt_inclusao' => $this->dt_inclusao,
            'dt_atualizacao' => $this->dt_atualizacao,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'descricao', $this->descricao]);

        return $dataProvider;
    }
}
