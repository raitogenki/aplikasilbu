<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Form36;

/**
 * Form36Search represents the model behind the search form about `app\models\Form36`.
 */
class Form36Search extends Form36
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['form_id', 'laporan_id', 'user_id', 'kreditur_hubungan_bank', 'kreditur_status'], 'integer'],
            [['create_at', 'update_at', 'status', 'jenis', 'jenis_valuta', 'kreditur_golongan'], 'safe'],
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
        $query = Form36::find();

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
            'kreditur_hubungan_bank' => $this->kreditur_hubungan_bank,
            'kreditur_status' => $this->kreditur_status,
            'suku_bunga' => $this->suku_bunga,
            'jumlah_bulan_lalu' => $this->jumlah_bulan_lalu,
            'jumlah_debet' => $this->jumlah_debet,
            'jumlah_kredit' => $this->jumlah_kredit,
            'jumlah_lainnya' => $this->jumlah_lainnya,
            'jumlah_bulan_laporan' => $this->jumlah_bulan_laporan,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'jenis_valuta', $this->jenis_valuta])
            ->andFilterWhere(['like', 'kreditur_golongan', $this->kreditur_golongan]);

        return $dataProvider;
    }
}
