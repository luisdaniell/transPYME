<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "vehiculo".
 *
 * @property string $veh_patente
 * @property string $emp_rut
 * @property string $veh_tipo
 * @property string $veh_marca
 * @property string $veh_color
 * @property string $veh_fecha_compra
 * @property integer $veh_km_compra
 * @property integer $veh_valor_compra
 * @property integer $veh_max_carga
 * @property string $veh_observaciones
 * @property integer $veh_carter
 * @property integer $veh_caja
 * @property integer $veh_diferencial
 * @property integer $veh_num_motor
 * @property integer $veh_num_chasis
 * @property integer $veh_num_ejes
 * @property string $veh_imagen
 * @property integer $veh_gps_cod
 *
 * @property CargaCombustible[] $cargaCombustibles
 * @property InformeGps[] $informeGps
 * @property Mantencion[] $mantencions
 * @property UniVehCar[] $uniVehCars
 * @property Carro[] $carPatentes
 * @property UniVehCho[] $uniVehChos
 * @property Chofer[] $choRuts
 * @property UniVehNeu[] $uniVehNeus
 * @property Neumatico[] $neuSeries
 * @property EmpresaPyme $empRut
 * @property ViajeEfectuado[] $viajeEfectuados
 */
class Vehiculo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'vehiculo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['veh_patente', 'emp_rut', 'veh_tipo', 'veh_marca', 'veh_color', 'veh_fecha_compra', 'veh_km_compra'], 'required'],
            [['veh_fecha_compra'], 'safe'],
            [['veh_km_compra', 'veh_valor_compra', 'veh_max_carga', 'veh_carter', 'veh_caja', 'veh_diferencial', 'veh_num_motor', 'veh_num_chasis', 'veh_num_ejes', 'veh_gps_cod'], 'integer'],
            [['veh_patente'], 'string', 'max' => 7],
            [['emp_rut'], 'string', 'max' => 10],
            [['veh_tipo', 'veh_marca'], 'string', 'max' => 50],
            [['veh_color'], 'string', 'max' => 20],
            [['veh_observaciones'], 'string', 'max' => 1000],
            [['veh_imagen'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'veh_patente' => 'Patente',
            'emp_rut' => 'Rut empresa',
            'veh_tipo' => 'Tipo de vehículo',
            'veh_marca' => 'Marca',
            'veh_color' => 'Color',
            'veh_fecha_compra' => 'Fecha de compra',
            'veh_km_compra' => 'Kilometraje al momento de compra',
            'veh_valor_compra' => 'Valor de compra (CLP)',
            'veh_max_carga' => 'Carga máxima (Kg)',
            'veh_observaciones' => 'Observaciones',
            'veh_carter' => 'Carter',
            'veh_caja' => 'Caja',
            'veh_diferencial' => 'Diferencial',
            'veh_num_motor' => 'Número de motor',
            'veh_num_chasis' => 'Número de chasis',
            'veh_num_ejes' => 'Número de ejes',
            'veh_imagen' => 'Imagen',
            'veh_gps_cod' => 'Número de GPS',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCargaCombustibles()
    {
        return $this->hasMany(CargaCombustible::className(), ['veh_patente' => 'veh_patente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getInformeGps()
    {
        return $this->hasMany(InformeGps::className(), ['veh_patente' => 'veh_patente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMantencions()
    {
        return $this->hasMany(Mantencion::className(), ['veh_patente' => 'veh_patente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniVehCars()
    {
        return $this->hasMany(UniVehCar::className(), ['veh_patente' => 'veh_patente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarPatentes()
    {
        return $this->hasMany(Carro::className(), ['car_patente' => 'car_patente'])->viaTable('uni_veh_car', ['veh_patente' => 'veh_patente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniVehChos()
    {
        return $this->hasMany(UniVehCho::className(), ['veh_patente' => 'veh_patente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getChoRuts()
    {
        return $this->hasMany(Chofer::className(), ['cho_rut' => 'cho_rut'])->viaTable('uni_veh_cho', ['veh_patente' => 'veh_patente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUniVehNeus()
    {
        return $this->hasMany(UniVehNeu::className(), ['veh_patente' => 'veh_patente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNeuSeries()
    {
        return $this->hasMany(Neumatico::className(), ['neu_serie' => 'neu_serie'])->viaTable('uni_veh_neu', ['veh_patente' => 'veh_patente']);
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
    public function getViajeEfectuados()
    {
        return $this->hasMany(ViajeEfectuado::className(), ['veh_patente' => 'veh_patente']);
    }
}
