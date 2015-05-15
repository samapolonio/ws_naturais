<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "situacoes_pedido".
 *
 * @property integer $id_situacoes_pedido
 * @property string $nome
 * @property string $descricao
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property Pedidos[] $pedidos
 */
class SituacaoPedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'situacoes_pedido';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dt_inclusao', 'dt_atualizacao'], 'safe'],
            [['nome'], 'string', 'max' => 30],
            [['descricao'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_situacoes_pedido' => 'Id Situacoes Pedido',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'dt_inclusao' => 'Dt Inclusao',
            'dt_atualizacao' => 'Dt Atualizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedidos::className(), ['situacoes_pedido_id' => 'id_situacoes_pedido']);
    }
}
