<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Usuario;

/**
 * UsuarioSearch represents the model behind the search form about `backend\models\Usuario`.
 */
class UsuarioSearch extends Usuario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_usuarios', 'perfis_id'], 'integer'],
            [['nome', 'senha', 'email', 'cargo', 'dt_inclusao', 'dt_atualizacao'], 'safe'],
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
        $query = Usuario::find();

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
            'id_usuarios' => $this->id_usuarios,
            'perfis_id' => $this->perfis_id,
            'dt_inclusao' => $this->dt_inclusao,
            'dt_atualizacao' => $this->dt_atualizacao,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'senha', $this->senha])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'cargo', $this->cargo]);

        return $dataProvider;
    }
}
