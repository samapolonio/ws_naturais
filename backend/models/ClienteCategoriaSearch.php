<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ClienteCategoria;

/**
 * ClienteCategoriaSearch represents the model behind the search form about `backend\models\ClienteCategoria`.
 */
class ClienteCategoriaSearch extends ClienteCategoria
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['clientes_id', 'categorias_id'], 'integer'],
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
        $query = ClienteCategoria::find();

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
            'clientes_id' => $this->clientes_id,
            'categorias_id' => $this->categorias_id,
            'dt_inclusao' => $this->dt_inclusao,
            'dt_atualizacao' => $this->dt_atualizacao,
        ]);

        return $dataProvider;
    }
}
