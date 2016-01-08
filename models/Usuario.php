<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property string $usu_email
 * @property integer $usu_tipo
 * @property string $usu_contraseña
 * @property integer $usu_vigente
 * @property string $emp_rut
 * @property string $usu_rut
 * @property string $usu_nombres
 * @property string $usu_apell_paterno
 * @property string $usu_apell_materno
 * @property integer $usu_telefono
 * @property integer $rol_codigo
 *
 * @property EmpresaPyme $empRut
 * @property Rol $rolCodigo
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usu_email', 'usu_tipo', 'usu_contraseña', 'usu_rut', 'usu_nombres', 'usu_apell_paterno', 'usu_apell_materno', 'usu_telefono', 'rol_codigo'], 'required'],
            [['usu_tipo', 'usu_vigente', 'usu_telefono', 'rol_codigo'], 'integer'],
            [['usu_email'], 'string', 'max' => 50],
            [['usu_contraseña'], 'string', 'max' => 20],
            [['emp_rut', 'usu_rut'], 'string', 'max' => 10],
            [['usu_nombres'], 'string', 'max' => 200],
            [['usu_apell_paterno', 'usu_apell_materno'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usu_email' => Yii::t('app', 'e-mail'),
            'usu_tipo' => Yii::t('app', 'Tipo de usuario'),
            'usu_contraseña' => Yii::t('app', 'Contraseña'),
            'usu_vigente' => Yii::t('app', 'Vigente'),
            'emp_rut' => Yii::t('app', 'Rut empresa'),
            'usu_rut' => Yii::t('app', 'Rut representante'),
            'usu_nombres' => Yii::t('app', 'Nombres'),
            'usu_apell_paterno' => Yii::t('app', 'Apellido paterno'),
            'usu_apell_materno' => Yii::t('app', 'Apellido materno'),
            'usu_telefono' => Yii::t('app', 'Teléfono'),
            'rol_codigo' => Yii::t('app', 'Rol Codigo'),
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
    public function getRolCodigo()
    {
        return $this->hasOne(Rol::className(), ['rol_codigo' => 'rol_codigo']);
    }
}
