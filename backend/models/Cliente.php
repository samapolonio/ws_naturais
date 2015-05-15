<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "clientes".
 *
 * @property integer $id_clientes
 * @property string $cnpj
 * @property string $inscricao_estadual
 * @property string $razao_social
 * @property string $nome_fantasia
 * @property string $situacao
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property ClientesCategorias[] $clientesCategorias
 * @property Categorias[] $categorias
 * @property Contatos[] $contatos
 * @property Enderecos[] $enderecos
 * @property Pedidos[] $pedidos
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clientes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dt_inclusao', 'dt_atualizacao'], 'safe'],
            [['cnpj'], 'string', 'max' => 20],
            [['inscricao_estadual'], 'string', 'max' => 45],
            [['razao_social', 'nome_fantasia'], 'string', 'max' => 200],
            [['situacao'], 'string', 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_clientes' => 'Id Clientes',
            'cnpj' => 'Cnpj',
            'inscricao_estadual' => 'Inscricao Estadual',
            'razao_social' => 'Razao Social',
            'nome_fantasia' => 'Nome Fantasia',
            'situacao' => 'Situacao',
            'dt_inclusao' => 'Dt Inclusao',
            'dt_atualizacao' => 'Dt Atualizacao',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientesCategorias()
    {
        return $this->hasMany(ClientesCategorias::className(), ['clientes_id' => 'id_clientes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategorias()
    {
        return $this->hasMany(Categorias::className(), ['id_categorias' => 'categorias_id'])->viaTable('clientes_categorias', ['clientes_id' => 'id_clientes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContatos()
    {
        return $this->hasMany(Contatos::className(), ['clientes_id' => 'id_clientes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEnderecos()
    {
        return $this->hasMany(Enderecos::className(), ['clientes_id' => 'id_clientes']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedidos()
    {
        return $this->hasMany(Pedidos::className(), ['clientes_id' => 'id_clientes']);
    }
}
