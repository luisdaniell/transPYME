<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rol".
 *
 * @property integer $rol_codigo
 * @property string $rol_nombre
 *
 * @property Usuario[] $usuarios
 */
class Rol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rol_nombre'], 'required'],
            [['rol_nombre'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'rol_codigo' => Yii::t('app', 'Código'),
            'rol_nombre' => Yii::t('app', 'Nombre de rol'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['rol_codigo' => 'rol_codigo']);
    }
}
