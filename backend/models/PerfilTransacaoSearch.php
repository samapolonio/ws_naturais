<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PerfilTransacao;

/**
 * PerfilTransacaoSearch represents the model behind the search form about `backend\models\PerfilTransacao`.
 */
class PerfilTransacaoSearch extends PerfilTransacao
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['transacoes_id', 'perfis_id'], 'integer'],
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
        $query = PerfilTransacao::find();

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
            'transacoes_id' => $this->transacoes_id,
            'perfis_id' => $this->perfis_id,
            'dt_inclusao' => $this->dt_inclusao,
            'dt_atualizacao' => $this->dt_atualizacao,
        ]);

        return $dataProvider;
    }
}
