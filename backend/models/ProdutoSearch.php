<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Produto;

/**
 * ProdutoSearch represents the model behind the search form about `backend\models\Produto`.
 */
class ProdutoSearch extends Produto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_produtos', 'estoque_critico', 'estoque_virtual', 'estoque_fisico', 'qtd_caixa'], 'integer'],
            [['nome', 'imagem', 'dt_inclusao', 'dt_atualizacao'], 'safe'],
            [['preco_atual', 'peso'], 'number'],
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
        $query = Produto::find();

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
            'id_produtos' => $this->id_produtos,
            'preco_atual' => $this->preco_atual,
            'estoque_critico' => $this->estoque_critico,
            'estoque_virtual' => $this->estoque_virtual,
            'estoque_fisico' => $this->estoque_fisico,
            'peso' => $this->peso,
            'qtd_caixa' => $this->qtd_caixa,
            'dt_inclusao' => $this->dt_inclusao,
            'dt_atualizacao' => $this->dt_atualizacao,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'imagem', $this->imagem]);

        return $dataProvider;
    }
}
