<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ProdutoRemessa;

/**
 * ProdutoRemessaSearch represents the model behind the search form about `backend\models\ProdutoRemessa`.
 */
class ProdutoRemessaSearch extends ProdutoRemessa
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['produtos_id', 'remessas_id', 'quant'], 'integer'],
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
        $query = ProdutoRemessa::find();

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
            'remessas_id' => $this->remessas_id,
            'quant' => $this->quant,
            'preco' => $this->preco,
            'dt_inclusao' => $this->dt_inclusao,
            'dt_atualizacao' => $this->dt_atualizacao,
        ]);

        return $dataProvider;
    }
}
