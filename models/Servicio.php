<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "servicio".
 *
 * @property integer $ser_codigo
 * @property string $ser_nombre
 * @property string $ser_descripcion
 *
 * @property EmpContrataServ[] $empContrataServs
 * @property EmpresaPyme[] $empRuts
 */
class Servicio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'servicio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ser_nombre'], 'required'],
            [['ser_nombre'], 'string', 'max' => 50],
            [['ser_descripcion'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ser_codigo' => Yii::t('app', 'Servicio'),
            'ser_nombre' => Yii::t('app', 'Nombre de servicio'),
            'ser_descripcion' => Yii::t('app', 'Descripcion'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpContrataServs()
    {
        return $this->hasMany(EmpContrataServ::className(), ['ser_codigo' => 'ser_codigo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpRuts()
    {
        return $this->hasMany(EmpresaPyme::className(), ['emp_rut' => 'emp_rut'])->viaTable('emp_contrata_serv', ['ser_codigo' => 'ser_codigo']);
    }
}
