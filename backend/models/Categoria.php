<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "categorias".
 *
 * @property integer $id_categorias
 * @property string $nome
 * @property string $descricao
 * @property string $icone
 * @property string $limite_inferior
 * @property string $limite_superior
 * @property integer $qtd_dias
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property ClientesCategorias[] $clientesCategorias
 * @property Clientes[] $clientes
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['limite_inferior', 'limite_superior'], 'number'],
            [['qtd_dias'], 'integer'],
            [['dt_inclusao', 'dt_atualizacao'], 'safe'],
            [['nome'], 'string', 'max' => 30],
            [['descricao', 'icone'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_categorias' => 'Id Categorias',
            'nome' => 'Nome',
            'descricao' => 'Descricao',
            'icone' => 'Icone',
            'limite_inferior' => 'Limite Inferior',
            'limite_superior' => 'Limite Superior',
            'qtd_dias' => 'Qtd Dias',
            'dt_inclusao' => 'Dt Inclusao',
            'dt_atualizacao' => 'Dt Atualizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientesCategorias()
    {
        return $this->hasMany(ClientesCategorias::className(), ['categorias_id' => 'id_categorias']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Clientes::className(), ['id_clientes' => 'clientes_id'])->viaTable('clientes_categorias', ['categorias_id' => 'id_categorias']);
    }
}
