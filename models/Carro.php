<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carro".
 *
 * @property string $car_patente
 * @property string $emp_rut
 * @property string $car_marca
 * @property integer $car_num_ejes
 * @property string $car_tipo
 * @property string $car_fecha_compra
 * @property integer $car_valor_compra
 * @property string $car_observacion
 * @property string $car_imagen
 *
 * @property EmpresaPyme $empRut
 * @property UniVehCar[] $uniVehCars
 * @property Vehiculo[] $vehPatentes
 */
class Carro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_patente', 'emp_rut', 'car_marca', 'car_num_ejes', 'car_tipo', 'car_fecha_compra'], 'required'],
            [['car_num_ejes', 'car_valor_compra'], 'integer'],
            [['car_fecha_compra'], 'safe'],
            [['car_patente'], 'string', 'max' => 7],
            [['emp_rut'], 'string', 'max' => 10],
            [['car_marca', 'car_tipo'], 'string', 'max' => 50],
            [['car_observacion'], 'string', 'max' => 1000],
            [['car_imagen'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'car_patente' => 'Patente',
            'emp_rut' => 'Rut empresa',
            'car_marca' => 'Marca',
            'car_num_ejes' => 'Número de ejes',
            'car_tipo' => 'Tipo',
            'car_fecha_compra' => 'Fecha de compra',
            'car_valor_compra' => 'Valor de compra (CLP)',
            'car_observacion' => 'Observaciones',
            'car_imagen' => 'Fotografía',
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
    public function getUniVehCars()
    {
        return $this->hasMany(UniVehCar::className(), ['car_patente' => 'car_patente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehPatentes()
    {
        return $this->hasMany(Vehiculo::className(), ['veh_patente' => 'veh_patente'])->viaTable('uni_veh_car', ['car_patente' => 'car_patente']);
    }
}
