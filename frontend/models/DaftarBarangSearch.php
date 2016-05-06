<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\DaftarBarang;

/**
 * DaftarBarangSearch represents the model behind the search form about `frontend\models\DaftarBarang`.
 */
class DaftarBarangSearch extends DaftarBarang
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_barang', 'jumlah_barang'], 'integer'],
            [['nama_barang', 'jenis_barang'], 'safe'],
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
        $query = DaftarBarang::find();

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
            'id_barang' => $this->id_barang,
            'jumlah_barang' => $this->jumlah_barang,
        ]);

        $query->andFilterWhere(['like', 'nama_barang', $this->nama_barang])
            ->andFilterWhere(['like', 'jenis_barang', $this->jenis_barang]);

        return $dataProvider;
    }
}
