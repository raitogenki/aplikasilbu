<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Form28;

/**
 * Form28Search represents the model behind the search form about `app\models\Form28`.
 */
class Form28Search extends Form28
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['form_id', 'laporan_id', 'user_id', 'kontrak', 'variabel_mendasar', 'pihak_lawan_hubungan_bank', 'pihak_lawan_status'], 'integer'],
            [['create_at', 'update_at', 'status', 'nomer_referensi_transaksi', 'jenis', 'jenis_valuta', 'pihak_lawan_golongan', 'negara_pihak_lawan'], 'safe'],
            [['jumlah_kewajiban_bulan_lalu', 'jumlah_kewajiban_bulan_'], 'number'],
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
        $query = Form28::find();

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
            'kontrak' => $this->kontrak,
            'variabel_mendasar' => $this->variabel_mendasar,
            'pihak_lawan_hubungan_bank' => $this->pihak_lawan_hubungan_bank,
            'pihak_lawan_status' => $this->pihak_lawan_status,
            'jumlah_kewajiban_bulan_lalu' => $this->jumlah_kewajiban_bulan_lalu,
            'jumlah_kewajiban_bulan_' => $this->jumlah_kewajiban_bulan_,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'nomer_referensi_transaksi', $this->nomer_referensi_transaksi])
            ->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'jenis_valuta', $this->jenis_valuta])
            ->andFilterWhere(['like', 'pihak_lawan_golongan', $this->pihak_lawan_golongan])
            ->andFilterWhere(['like', 'negara_pihak_lawan', $this->negara_pihak_lawan]);

        return $dataProvider;
    }
}
