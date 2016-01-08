<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empresa_pyme".
 *
 * @property string $emp_rut
 * @property string $emp_nombre
 * @property string $emp_giro
 * @property string $emp_rubro
 * @property integer $emp_telefono
 * @property string $emp_direccion
 * @property string $emp_email
 * @property string $emp_descripcion
 *
 * @property Carro[] $carros
 * @property Cliente[] $clientes
 * @property EmpContrataCho[] $empContrataChos
 * @property Chofer[] $choRuts
 * @property EmpContrataServ[] $empContrataServs
 * @property Servicio[] $serCodigos
 * @property Informe[] $informes
 * @property Neumatico[] $neumaticos
 * @property ProgramaViaje[] $programaViajes
 * @property Proveedor[] $proveedors
 * @property Ruta[] $rutas
 * @property Usuario[] $usuarios
 * @property Vehiculo[] $vehiculos
 * @property ViajeEfectuado[] $viajeEfectuados
 */
class EmpresaPyme extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empresa_pyme';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_rut', 'emp_nombre', 'emp_giro', 'emp_rubro', 'emp_telefono', 'emp_direccion', 'emp_email', 'emp_descripcion'], 'required'],
            [['emp_telefono'], 'integer'],
            [['emp_rut'], 'string', 'max' => 10],
            [['emp_nombre', 'emp_giro', 'emp_rubro'], 'string', 'max' => 100],
            [['emp_direccion'], 'string', 'max' => 200],
            [['emp_email'], 'string', 'max' => 50],
            [['emp_descripcion'], 'string', 'max' => 1000]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'emp_rut' => Yii::t('app', 'RUT'),
            'emp_nombre' => Yii::t('app', 'Nombre'),
            'emp_giro' => Yii::t('app', 'Giro'),
            'emp_rubro' => Yii::t('app', 'Rubro'),
            'emp_telefono' => Yii::t('app', 'Teléfono'),
            'emp_direccion' => Yii::t('app', 'Dirección'),
            'emp_email' => Yii::t('app', 'e-mail'),
            'emp_descripcion' => Yii::t('app', 'Descripción'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarros()
    {
        return $this->hasMany(Carro::className(), ['emp_rut' => 'emp_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Cliente::className(), ['emp_rut' => 'emp_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpContrataChos()
    {
        return $this->hasMany(EmpContrataCho::className(), ['emp_rut' => 'emp_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChoRuts()
    {
        return $this->hasMany(Chofer::className(), ['cho_rut' => 'cho_rut'])->viaTable('emp_contrata_cho', ['emp_rut' => 'emp_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpContrataServs()
    {
        return $this->hasMany(EmpContrataServ::className(), ['emp_rut' => 'emp_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSerCodigos()
    {
        return $this->hasMany(Servicio::className(), ['ser_codigo' => 'ser_codigo'])->viaTable('emp_contrata_serv', ['emp_rut' => 'emp_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInformes()
    {
        return $this->hasMany(Informe::className(), ['emp_rut' => 'emp_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNeumaticos()
    {
        return $this->hasMany(Neumatico::className(), ['emp_rut' => 'emp_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramaViajes()
    {
        return $this->hasMany(ProgramaViaje::className(), ['emp_rut' => 'emp_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProveedors()
    {
        return $this->hasMany(Proveedor::className(), ['emp_rut' => 'emp_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRutas()
    {
        return $this->hasMany(Ruta::className(), ['emp_rut' => 'emp_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['emp_rut' => 'emp_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehiculos()
    {
        return $this->hasMany(Vehiculo::className(), ['emp_rut' => 'emp_rut']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getViajeEfectuados()
    {
        return $this->hasMany(ViajeEfectuado::className(), ['emp_rut' => 'emp_rut']);
    }
}
