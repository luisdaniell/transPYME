<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vehiculo;

/**
 * VehiculoSearch represents the model behind the search form about `app\models\Vehiculo`.
 */
class VehiculoSearch extends Vehiculo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['veh_patente', 'emp_rut', 'veh_tipo', 'veh_marca', 'veh_color', 'veh_fecha_compra', 'veh_observaciones', 'veh_imagen'], 'safe'],
            [['veh_km_compra', 'veh_valor_compra', 'veh_max_carga', 'veh_carter', 'veh_caja', 'veh_diferencial', 'veh_num_motor', 'veh_num_chasis', 'veh_num_ejes', 'veh_gps_cod'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Vehiculo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'veh_fecha_compra' => $this->veh_fecha_compra,
            'veh_km_compra' => $this->veh_km_compra,
            'veh_valor_compra' => $this->veh_valor_compra,
            'veh_max_carga' => $this->veh_max_carga,
            'veh_carter' => $this->veh_carter,
            'veh_caja' => $this->veh_caja,
            'veh_diferencial' => $this->veh_diferencial,
            'veh_num_motor' => $this->veh_num_motor,
            'veh_num_chasis' => $this->veh_num_chasis,
            'veh_num_ejes' => $this->veh_num_ejes,
            'veh_gps_cod' => $this->veh_gps_cod,
        ]);

        $query->andFilterWhere(['like', 'veh_patente', $this->veh_patente])
            ->andFilterWhere(['like', 'emp_rut', $this->emp_rut])
            ->andFilterWhere(['like', 'veh_tipo', $this->veh_tipo])
            ->andFilterWhere(['like', 'veh_marca', $this->veh_marca])
            ->andFilterWhere(['like', 'veh_color', $this->veh_color])
            ->andFilterWhere(['like', 'veh_observaciones', $this->veh_observaciones])
            ->andFilterWhere(['like', 'veh_imagen', $this->veh_imagen]);

        return $dataProvider;
    }
}
