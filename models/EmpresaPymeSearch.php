<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EmpresaPyme;

/**
 * EmpresaPymeSearch represents the model behind the search form about `app\models\EmpresaPyme`.
 */
class EmpresaPymeSearch extends EmpresaPyme
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_rut', 'emp_nombre', 'emp_giro', 'emp_rubro', 'emp_direccion', 'emp_email', 'emp_descripcion'], 'safe'],
            [['emp_telefono'], 'integer'],
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
        $query = EmpresaPyme::find();

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
            'emp_telefono' => $this->emp_telefono,
        ]);

        $query->andFilterWhere(['like', 'emp_rut', $this->emp_rut])
            ->andFilterWhere(['like', 'emp_nombre', $this->emp_nombre])
            ->andFilterWhere(['like', 'emp_giro', $this->emp_giro])
            ->andFilterWhere(['like', 'emp_rubro', $this->emp_rubro])
            ->andFilterWhere(['like', 'emp_direccion', $this->emp_direccion])
            ->andFilterWhere(['like', 'emp_email', $this->emp_email])
            ->andFilterWhere(['like', 'emp_descripcion', $this->emp_descripcion]);

        return $dataProvider;
    }
}
