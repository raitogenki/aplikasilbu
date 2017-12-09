<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Form12;

/**
 * Form12Search represents the model behind the search form about `app\models\Form12`.
 */
class Form12Search extends Form12
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['form_id', 'laporan_id', 'user_id', 'perusahaan_emiten_status', 'metode_penyertaan', 'kualitas', 'tujuan_penyertaan'], 'integer'],
            [['create_at', 'update_at', 'status', 'perusahaan_emiten_golongan', 'negara_tujuan', 'jenis_valuta', 'waktu_penyertaan'], 'safe'],
            [['bagian_penyertaan', 'nominal', 'jumlah_bulan_lalu', 'jumlah_debet', 'jumlah_kredit', 'jumlah_lainnya', 'jumlah_bulan_laporan', 'nilai_agunan_diperhitungkan', 'cadangan_kerugian_individu', 'cadangan_kerugian_kolektif'], 'number'],
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
        $query = Form12::find();

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
            'perusahaan_emiten_status' => $this->perusahaan_emiten_status,
            'metode_penyertaan' => $this->metode_penyertaan,
            'kualitas' => $this->kualitas,
            'tujuan_penyertaan' => $this->tujuan_penyertaan,
            'waktu_penyertaan' => $this->waktu_penyertaan,
            'bagian_penyertaan' => $this->bagian_penyertaan,
            'nominal' => $this->nominal,
            'jumlah_bulan_lalu' => $this->jumlah_bulan_lalu,
            'jumlah_debet' => $this->jumlah_debet,
            'jumlah_kredit' => $this->jumlah_kredit,
            'jumlah_lainnya' => $this->jumlah_lainnya,
            'jumlah_bulan_laporan' => $this->jumlah_bulan_laporan,
            'nilai_agunan_diperhitungkan' => $this->nilai_agunan_diperhitungkan,
            'cadangan_kerugian_individu' => $this->cadangan_kerugian_individu,
            'cadangan_kerugian_kolektif' => $this->cadangan_kerugian_kolektif,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'perusahaan_emiten_golongan', $this->perusahaan_emiten_golongan])
            ->andFilterWhere(['like', 'negara_tujuan', $this->negara_tujuan])
            ->andFilterWhere(['like', 'jenis_valuta', $this->jenis_valuta]);

        return $dataProvider;
    }
}
