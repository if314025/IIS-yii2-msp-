<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DaftarSupplier;

/**
 * DaftarSupplierSearch represents the model behind the search form about `frontend\models\DaftarSupplier`.
 */
class DaftarSupplierSearch extends DaftarSupplier
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_supplier'], 'integer'],
            [['Nama_supplier', 'Alamat_Supplier'], 'safe'],
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
        $query = DaftarSupplier::find();

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
            'id_supplier' => $this->id_supplier,
        ]);

        $query->andFilterWhere(['like', 'Nama_supplier', $this->Nama_supplier])
            ->andFilterWhere(['like', 'Alamat_Supplier', $this->Alamat_Supplier]);

        return $dataProvider;
    }
}
