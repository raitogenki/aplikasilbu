<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Form04;

/**
 * Form04Search represents the model behind the search form about `app\models\Form04`.
 */
class Form04Search extends Form04
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['form_id', 'laporan_id', 'user_id'], 'integer'],
            [['create_at', 'update_at', 'status', 'jenis', 'jenis_valuta', 'jangka_mulai', 'jangka_jatuh_tempo'], 'safe'],
            [['suku_bunga', 'jumlah'], 'number'],
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
        $query = Form04::find();

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
            'jangka_mulai' => $this->jangka_mulai,
            'jangka_jatuh_tempo' => $this->jangka_jatuh_tempo,
            'suku_bunga' => $this->suku_bunga,
            'jumlah' => $this->jumlah,
        ]);

        $query->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'jenis', $this->jenis])
            ->andFilterWhere(['like', 'jenis_valuta', $this->jenis_valuta]);

        return $dataProvider;
    }
}
