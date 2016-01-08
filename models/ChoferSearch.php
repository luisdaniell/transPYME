<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Chofer;

/**
 * ChoferSearch represents the model behind the search form about `app\models\Chofer`.
 */
class ChoferSearch extends Chofer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cho_rut', 'cho_num_licencia', 'cho_primer_nombre', 'cho_segundo_nombre', 'cho_apell_paterno', 'cho_apell_materno', 'cho_fecha_nac', 'cho_direccion', 'cho_email', 'cho_imagen'], 'safe'],
            [['cho_telefono', 'cho_sueldo'], 'integer'],
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
        $query = Chofer::find();

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
            'cho_fecha_nac' => $this->cho_fecha_nac,
            'cho_telefono' => $this->cho_telefono,
            'cho_sueldo' => $this->cho_sueldo,
        ]);

        $query->andFilterWhere(['like', 'cho_rut', $this->cho_rut])
            ->andFilterWhere(['like', 'cho_num_licencia', $this->cho_num_licencia])
            ->andFilterWhere(['like', 'cho_primer_nombre', $this->cho_primer_nombre])
            ->andFilterWhere(['like', 'cho_segundo_nombre', $this->cho_segundo_nombre])
            ->andFilterWhere(['like', 'cho_apell_paterno', $this->cho_apell_paterno])
            ->andFilterWhere(['like', 'cho_apell_materno', $this->cho_apell_materno])
            ->andFilterWhere(['like', 'cho_direccion', $this->cho_direccion])
            ->andFilterWhere(['like', 'cho_email', $this->cho_email])
            ->andFilterWhere(['like', 'cho_imagen', $this->cho_imagen]);

        return $dataProvider;
    }
}
