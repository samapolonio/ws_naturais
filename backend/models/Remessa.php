<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "remessas".
 *
 * @property integer $id_remessas
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property ProdutosRemessas[] $produtosRemessas
 * @property Produtos[] $produtos
 */
class Remessa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'remessas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dt_inclusao', 'dt_atualizacao'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_remessas' => 'Id Remessas',
            'dt_inclusao' => 'Dt Inclusao',
            'dt_atualizacao' => 'Dt Atualizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutosRemessas()
    {
        return $this->hasMany(ProdutosRemessas::className(), ['remessas_id' => 'id_remessas']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProdutos()
    {
        return $this->hasMany(Produtos::className(), ['id_produtos' => 'produtos_id'])->viaTable('produtos_remessas', ['remessas_id' => 'id_remessas']);
    }
}
