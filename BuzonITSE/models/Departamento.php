<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departamento".
 *
 * @property int $id
 * @property string $departamento
 * @property string $encargado
 */
class Departamento extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'departamento';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['departamento', 'encargado'], 'required'],
            [['departamento', 'encargado'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'departamento' => 'Departamento',
            'encargado' => 'Encargado',
        ];
    }
}
