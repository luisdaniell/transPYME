<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "emp_contrata_serv".
 *
 * @property string $emp_rut
 * @property integer $ser_codigo
 * @property string $serv_fecha_ini
 * @property string $serv_fecha_fin
 * @property integer $serv_vigente
 *
 * @property EmpresaPyme $empRut
 * @property Servicio $serCodigo
 */
class EmpContrataServ extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emp_contrata_serv';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_rut', 'ser_codigo', 'serv_fecha_ini'], 'required'],
            [['ser_codigo', 'serv_vigente'], 'integer'],
            [['serv_fecha_ini', 'serv_fecha_fin'], 'safe'],
            [['emp_rut'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'emp_rut' => Yii::t('app', 'Emp Rut'),
            'ser_codigo' => Yii::t('app', 'Ser Codigo'),
            'serv_fecha_ini' => Yii::t('app', 'Serv Fecha Ini'),
            'serv_fecha_fin' => Yii::t('app', 'Serv Fecha Fin'),
            'serv_vigente' => Yii::t('app', 'Serv Vigente'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpRut()
    {
        return $this->hasOne(EmpresaPyme::className(), ['emp_rut' => 'emp_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSerCodigo()
    {
        return $this->hasOne(Servicio::className(), ['ser_codigo' => 'ser_codigo']);
    }
}
