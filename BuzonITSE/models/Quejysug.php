<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "quejysug".
 *
 * @property int $id
 * @property string $tipo
 * @property string $departamento
 * @property string $descripcion
 * @property string $estatus
 * @property resource $Imagen
 */
class Quejysug extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    
    public static function tableName()
    {
        return 'quejysug';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'tipo', 'departamento', 'descripcion', 'estatus', 'Imagen'], 'required'],
            [['Imagen'], 'file', 'extensions'=> 'jpg,png,gif,jpeg'],
            [['tipo'], 'string', 'max' => 80],
            [['departamento', 'descripcion', 'estatus'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Folio',
            'tipo' => 'Tipo',
            'departamento' => 'Departamento',
            'descripcion' => 'Descripcion',
            'estatus' => 'Estatus',
            'Imagen' => 'Imagen',
        ];
    }
}
