<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Form16;

/**
 * Form16Search represents the model behind the search form about `app\models\Form16`.
 */
class Form16Search extends Form16
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['form_id', 'laporan_id', 'user_id', 'jenis_valuta', 'metode_pengukuran', 'kualitas'], 'integer'],
            [['create_at', 'update_at', 'status', 'jenis', 'tanggal_penetapan'], 'safe'],
            [['biaya_perolehan', 'cadangan_kerugian', 'akumulasi_penyusutan', 'jumlah', 'ppanp_dibentuk'], 'number'],
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
        $query = Form16::find();

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
            'tanggal_penetapan' => $this->tanggal_penetapan,
            'jenis_valuta' => $this->jenis_valuta,
            'metode_pengukuran' => $this->metode_pengukuran,
            'biaya_perolehan' => $this->biaya_perolehan,
            'cadangan_kerugian' => $this->cadangan_kerugian,
            'akumulasi_penyusutan' => $this->akumulasi_penyusutan,
            'jumlah' => $this->jumlah,
            'kualitas' => $this->kualitas,
            'ppanp_dibentuk' => $this->ppanp_dibentuk,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'jenis', $this->jenis]);

        return $dataProvider;
    }
}
