<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Endereco;

/**
 * EnderecoSearch represents the model behind the search form about `backend\models\Endereco`.
 */
class EnderecoSearch extends Endereco
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_enderecos', 'clientes_id', 'bairros_id'], 'integer'],
            [['tp_logradouro', 'logradouro', 'numero', 'complemento', 'cep', 'latitude', 'longitude', 'dt_inclusao', 'dt_atualizacao'], 'safe'],
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
        $query = Endereco::find();

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
            'id_enderecos' => $this->id_enderecos,
            'clientes_id' => $this->clientes_id,
            'bairros_id' => $this->bairros_id,
            'dt_inclusao' => $this->dt_inclusao,
            'dt_atualizacao' => $this->dt_atualizacao,
        ]);

        $query->andFilterWhere(['like', 'tp_logradouro', $this->tp_logradouro])
            ->andFilterWhere(['like', 'logradouro', $this->logradouro])
            ->andFilterWhere(['like', 'numero', $this->numero])
            ->andFilterWhere(['like', 'complemento', $this->complemento])
            ->andFilterWhere(['like', 'cep', $this->cep])
            ->andFilterWhere(['like', 'latitude', $this->latitude])
            ->andFilterWhere(['like', 'longitude', $this->longitude]);

        return $dataProvider;
    }
}
