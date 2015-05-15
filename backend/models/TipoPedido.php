<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tp_pedidos".
 *
 * @property integer $id_tp_pedidos
 * @property string $nome
 * @property string $descricao
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property Pedidos[] $pedidos
 */
class TipoPedido extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tp_pedidos';
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
            'id_tp_pedidos' => 'Id Tp Pedidos',
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
        return $this->hasMany(Pedidos::className(), ['tp_pedidos_id' => 'id_tp_pedidos']);
    }
}
