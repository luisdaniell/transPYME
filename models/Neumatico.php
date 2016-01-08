<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "neumatico".
 *
 * @property string $neu_serie
 * @property string $emp_rut
 * @property string $neu_marca
 * @property integer $neu_valor_compra
 * @property string $neu_fecha_compra
 * @property integer $neu_ancho
 * @property integer $neu_altura
 * @property integer $neu_diametro
 * @property integer $neu_km_acumulados
 * @property string $neu_observaciones
 * @property string $neu_imagen
 *
 * @property EmpresaPyme $empRut
 * @property UniVehNeu[] $uniVehNeus
 * @property Vehiculo[] $vehPatentes
 */
class Neumatico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'neumatico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['neu_serie', 'emp_rut', 'neu_marca', 'neu_valor_compra', 'neu_fecha_compra'], 'required'],
            [['neu_valor_compra', 'neu_ancho', 'neu_altura', 'neu_diametro', 'neu_km_acumulados'], 'integer'],
            [['neu_fecha_compra'], 'safe'],
            [['neu_serie'], 'string', 'max' => 20],
            [['emp_rut'], 'string', 'max' => 10],
            [['neu_marca'], 'string', 'max' => 100],
            [['neu_observaciones'], 'string', 'max' => 1000],
            [['neu_imagen'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'neu_serie' => Yii::t('app', 'Núm de serie'),
            'emp_rut' => Yii::t('app', 'Emp Rut'),
            'neu_marca' => Yii::t('app', 'Marca'),
            'neu_valor_compra' => Yii::t('app', 'Valor de compra (CLP)'),
            'neu_fecha_compra' => Yii::t('app', 'Fecha de compra'),
            'neu_ancho' => Yii::t('app', 'Ancho (mm)'),
            'neu_altura' => Yii::t('app', 'Alto (mm)'),
            'neu_diametro' => Yii::t('app', 'Diametro (in)'),
            'neu_km_acumulados' => Yii::t('app', 'Km Acumulados (Km)'),
            'neu_observaciones' => Yii::t('app', 'Observaciones'),
            'neu_imagen' => Yii::t('app', 'Fotografía'),
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
    public function getUniVehNeus()
    {
        return $this->hasMany(UniVehNeu::className(), ['neu_serie' => 'neu_serie']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVehPatentes()
    {
        return $this->hasMany(Vehiculo::className(), ['veh_patente' => 'veh_patente'])->viaTable('uni_veh_neu', ['neu_serie' => 'neu_serie']);
    }
}
