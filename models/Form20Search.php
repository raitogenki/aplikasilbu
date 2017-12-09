<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Form20;

/**
 * Form20Search represents the model behind the search form about `app\models\Form20`.
 */
class Form20Search extends Form20
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['form_id', 'laporan_id', 'user_id'], 'integer'],
            [['create_at', 'update_at', 'status', 'sandi_kantor', 'jenis', 'jenis_valuta'], 'safe'],
            [['suku_bunga', 'jumlah_bulan_lalu', 'jumlah_debet', 'jumlah_kredit', 'jumlah_lainnya', 'jumlah_bulan_laporan'], 'number'],
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
        $query = Form20::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'form_id' => $this->form_id,
            'create_at' => $this->create_at,
            'update_at' => $this->update_at,
            'laporan_id' => $this->laporan_id,
            'user_id' => $this->user_id,
            'suku_bunga' => $this->suku_bunga,
            'jumlah_bulan_lalu' => $this->jumlah_bulan_lalu,
            'jumlah_debet' => $this->jumlah_debet,
            'jumlah_kredit' => $this->jumlah_kredit,
            'jumlah_lainnya' => $this->jumlah_lainnya,
            'jumlah_bulan_laporan' => $this->jumlah_bulan_laporan,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'sandi_kantor', $this->sandi_kantor])
            ->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'jenis_valuta', $this->jenis_valuta]);

        return $dataProvider;
    }
}
