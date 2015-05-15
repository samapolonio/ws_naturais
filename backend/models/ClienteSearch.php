<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Cliente;

/**
 * ClienteSearch represents the model behind the search form about `backend\models\Cliente`.
 */
class ClienteSearch extends Cliente
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_clientes'], 'integer'],
            [['cnpj', 'inscricao_estadual', 'razao_social', 'nome_fantasia', 'situacao', 'dt_inclusao', 'dt_atualizacao'], 'safe'],
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
        $query = Cliente::find();

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
            'id_clientes' => $this->id_clientes,
            'dt_inclusao' => $this->dt_inclusao,
            'dt_atualizacao' => $this->dt_atualizacao,
        ]);

        $query->andFilterWhere(['like', 'cnpj', $this->cnpj])
            ->andFilterWhere(['like', 'inscricao_estadual', $this->inscricao_estadual])
            ->andFilterWhere(['like', 'razao_social', $this->razao_social])
            ->andFilterWhere(['like', 'nome_fantasia', $this->nome_fantasia])
            ->andFilterWhere(['like', 'situacao', $this->situacao]);

        return $dataProvider;
    }
}
