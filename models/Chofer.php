<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "chofer".
 *
 * @property string $cho_rut
 * @property string $cho_num_licencia
 * @property string $cho_primer_nombre
 * @property string $cho_segundo_nombre
 * @property string $cho_apell_paterno
 * @property string $cho_apell_materno
 * @property string $cho_fecha_nac
 * @property string $cho_direccion
 * @property integer $cho_telefono
 * @property string $cho_email
 * @property string $cho_imagen
 * @property integer $cho_sueldo
 *
 * @property ChofComision[] $chofComisions
 * @property Comision[] $comCodigos
 * @property EmpContrataCho[] $empContrataChos
 * @property EmpresaPyme[] $empRuts
 * @property UniVehCho[] $uniVehChos
 * @property Vehiculo[] $vehPatentes
 */
class Chofer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'chofer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cho_rut', 'cho_num_licencia', 'cho_primer_nombre', 'cho_segundo_nombre', 'cho_apell_paterno', 'cho_apell_materno', 'cho_fecha_nac', 'cho_direccion', 'cho_telefono'], 'required'],
            [['cho_fecha_nac'], 'safe'],
            [['cho_telefono', 'cho_sueldo'], 'integer'],
            [['cho_rut', 'cho_num_licencia'], 'string', 'max' => 10],
            [['cho_primer_nombre', 'cho_segundo_nombre', 'cho_apell_paterno', 'cho_apell_materno'], 'string', 'max' => 100],
            [['cho_direccion', 'cho_imagen'], 'string', 'max' => 200],
            [['cho_email'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cho_rut' => 'RUT',
            'cho_num_licencia' => 'Número de licencia',
            'cho_primer_nombre' => 'Primer nombre',
            'cho_segundo_nombre' => 'Segundo nombre',
            'cho_apell_paterno' => 'Apellido paterno',
            'cho_apell_materno' => 'Apellido materno',
            'cho_fecha_nac' => 'Fecha de nacimiento',
            'cho_direccion' => 'Dirección',
            'cho_telefono' => 'Teléfono',
            'cho_email' => 'e-mail',
            'cho_imagen' => 'Fotografía',
            'cho_sueldo' => 'Sueldo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChofComisions()
    {
        return $this->hasMany(ChofComision::className(), ['cho_rut' => 'cho_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComCodigos()
    {
        return $this->hasMany(Comision::className(), ['com_codigo' => 'com_codigo'])->viaTable('chof_comision', ['cho_rut' => 'cho_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpContrataChos()
    {
        return $this->hasMany(EmpContrataCho::className(), ['cho_rut' => 'cho_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpRuts()
    {
        return $this->hasMany(EmpresaPyme::className(), ['emp_rut' => 'emp_rut'])->viaTable('emp_contrata_cho', ['cho_rut' => 'cho_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniVehChos()
    {
        return $this->hasMany(UniVehCho::className(), ['cho_rut' => 'cho_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehPatentes()
    {
        return $this->hasMany(Vehiculo::className(), ['veh_patente' => 'veh_patente'])->viaTable('uni_veh_cho', ['cho_rut' => 'cho_rut']);
    }
}
