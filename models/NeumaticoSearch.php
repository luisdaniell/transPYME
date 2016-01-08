<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Neumatico;

/**
 * NeumaticoSearch represents the model behind the search form about `app\models\Neumatico`.
 */
class NeumaticoSearch extends Neumatico
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['neu_serie', 'emp_rut', 'neu_marca', 'neu_fecha_compra', 'neu_observaciones', 'neu_imagen'], 'safe'],
            [['neu_valor_compra', 'neu_ancho', 'neu_altura', 'neu_diametro', 'neu_km_acumulados'], 'integer'],
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
        $query = Neumatico::find();

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
            'neu_valor_compra' => $this->neu_valor_compra,
            'neu_fecha_compra' => $this->neu_fecha_compra,
            'neu_ancho' => $this->neu_ancho,
            'neu_altura' => $this->neu_altura,
            'neu_diametro' => $this->neu_diametro,
            'neu_km_acumulados' => $this->neu_km_acumulados,
        ]);

        $query->andFilterWhere(['like', 'neu_serie', $this->neu_serie])
            ->andFilterWhere(['like', 'emp_rut', $this->emp_rut])
            ->andFilterWhere(['like', 'neu_marca', $this->neu_marca])
            ->andFilterWhere(['like', 'neu_observaciones', $this->neu_observaciones])
            ->andFilterWhere(['like', 'neu_imagen', $this->neu_imagen]);

        return $dataProvider;
    }
}
