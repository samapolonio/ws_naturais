<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "uf".
 *
 * @property integer $id_uf
 * @property string $sigla
 * @property string $nome
 * @property string $dt_inclusao
 * @property string $dt_atualizacao
 *
 * @property Cidades[] $cidades
 */
class Uf extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'uf';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sigla'], 'required', 'message' => 'Informe a sigla da UF'],
			[['nome'], 'required', 'message' => 'Informe o nome da UF'],
            [['dt_inclusao', 'dt_atualizacao'], 'safe'],
            [['sigla'], 'string', 'max' => 2],
            [['nome'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sigla' => 'Sigla',
            'nome' => 'Nome',
			'dt_inclusao' => 'Inclus&atilde;o',
			'dt_atualizacao' => '&Uacute;ltima Atualiza&ccedil;&atilde;o',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCidades()
    {
        return $this->hasMany(Cidades::className(), ['uf_id' => 'id_uf']);
    }
}
