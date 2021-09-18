<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Aholi;

/**
 * AholiSearch represents the model behind the search form of `app\models\Aholi`.
 */
class AholiSearch extends Aholi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'xujaliklar_soni', 'oilalar_soni', 'erkaklar_soni', 'ayollar_soni', 'jami_aholi_soni', 'yosh_bolalar_soni', 'uspirinlar_soni', 'voyaga_yetmaganlar_soni', 'voyaga_yetganlar_soni', 'jami_yoshlar_soni', 'boquvchisini_yuqotgan_oilalar_soni', 'yolgiz_keksalar_soni', 'nogironlar_soni', 'urush_faxriylar_soni', 'pensiyanerlar_soni', 'yuzdan_oshganlar_soni', 'mfy_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Aholi::find();

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
            'id' => $this->id,
            'xujaliklar_soni' => $this->xujaliklar_soni,
            'oilalar_soni' => $this->oilalar_soni,
            'erkaklar_soni' => $this->erkaklar_soni,
            'ayollar_soni' => $this->ayollar_soni,
            'jami_aholi_soni' => $this->jami_aholi_soni,
            'yosh_bolalar_soni' => $this->yosh_bolalar_soni,
            'uspirinlar_soni' => $this->uspirinlar_soni,
            'voyaga_yetmaganlar_soni' => $this->voyaga_yetmaganlar_soni,
            'voyaga_yetganlar_soni' => $this->voyaga_yetganlar_soni,
            'jami_yoshlar_soni' => $this->jami_yoshlar_soni,
            'boquvchisini_yuqotgan_oilalar_soni' => $this->boquvchisini_yuqotgan_oilalar_soni,
            'yolgiz_keksalar_soni' => $this->yolgiz_keksalar_soni,
            'nogironlar_soni' => $this->nogironlar_soni,
            'urush_faxriylar_soni' => $this->urush_faxriylar_soni,
            'pensiyanerlar_soni' => $this->pensiyanerlar_soni,
            'yuzdan_oshganlar_soni' => $this->yuzdan_oshganlar_soni,
            'mfy_id' => $this->mfy_id,
        ]);

        return $dataProvider;
    }
}
