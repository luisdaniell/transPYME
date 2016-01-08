<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Carro;

/**
 * CarroSearch represents the model behind the search form about `app\models\Carro`.
 */
class CarroSearch extends Carro
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['car_patente', 'emp_rut', 'car_marca', 'car_tipo', 'car_fecha_compra', 'car_observacion', 'car_imagen'], 'safe'],
            [['car_num_ejes', 'car_valor_compra'], 'integer'],
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
        $query = Carro::find();

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
            'car_num_ejes' => $this->car_num_ejes,
            'car_fecha_compra' => $this->car_fecha_compra,
            'car_valor_compra' => $this->car_valor_compra,
        ]);

        $query->andFilterWhere(['like', 'car_patente', $this->car_patente])
            ->andFilterWhere(['like', 'emp_rut', $this->emp_rut])
            ->andFilterWhere(['like', 'car_marca', $this->car_marca])
            ->andFilterWhere(['like', 'car_tipo', $this->car_tipo])
            ->andFilterWhere(['like', 'car_observacion', $this->car_observacion])
            ->andFilterWhere(['like', 'car_imagen', $this->car_imagen]);

        return $dataProvider;
    }
}
