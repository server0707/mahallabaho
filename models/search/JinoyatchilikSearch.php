<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Jinoyatchilik;

/**
 * JinoyatchilikSearch represents the model behind the search form of `app\models\Jinoyatchilik`.
 */
class JinoyatchilikSearch extends Jinoyatchilik
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'aniqlangan_jinoyat_soni', 'ehtiyotsiz_jinoyat_soni', 'iqtisodiy_jinoyat_soni', 'kasbiy_jinoyat_soni', 'maxsus_jinoyat_soni', 'jami_jinoyat_soni', 'qasddan_odamuldirish_soni', 'ogirshikast_yetkazish_soni', 'ortashikast_yetkazish_soni', 'yengilshikast_yetkazish_soni', 'nomusga_tegish_soni', 'bosqinchilik_soni', 'talonchilik_soni', 'ugrilik_soni', 'giyohvandlik_soni', 'bezorilik_soni', 'boshqajinoyat_soni', 'mahaladagi_jamijinoyat_soni', 'doimiy_yashovchilar_soni', 'boshqa_mahallada_yashovchilar_soni', 'boshqa_tumanda_yashovchilar_soni', 'boshqa_viloyatda_yashovchilar_soni', 'chet_el_fuqarosi_soni', 'jami_shaxslar_soni', 'mfy_id'], 'integer'],
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
        $query = Jinoyatchilik::find();

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
            'aniqlangan_jinoyat_soni' => $this->aniqlangan_jinoyat_soni,
            'ehtiyotsiz_jinoyat_soni' => $this->ehtiyotsiz_jinoyat_soni,
            'iqtisodiy_jinoyat_soni' => $this->iqtisodiy_jinoyat_soni,
            'kasbiy_jinoyat_soni' => $this->kasbiy_jinoyat_soni,
            'maxsus_jinoyat_soni' => $this->maxsus_jinoyat_soni,
            'jami_jinoyat_soni' => $this->jami_jinoyat_soni,
            'qasddan_odamuldirish_soni' => $this->qasddan_odamuldirish_soni,
            'ogirshikast_yetkazish_soni' => $this->ogirshikast_yetkazish_soni,
            'ortashikast_yetkazish_soni' => $this->ortashikast_yetkazish_soni,
            'yengilshikast_yetkazish_soni' => $this->yengilshikast_yetkazish_soni,
            'nomusga_tegish_soni' => $this->nomusga_tegish_soni,
            'bosqinchilik_soni' => $this->bosqinchilik_soni,
            'talonchilik_soni' => $this->talonchilik_soni,
            'ugrilik_soni' => $this->ugrilik_soni,
            'giyohvandlik_soni' => $this->giyohvandlik_soni,
            'bezorilik_soni' => $this->bezorilik_soni,
            'boshqajinoyat_soni' => $this->boshqajinoyat_soni,
            'mahaladagi_jamijinoyat_soni' => $this->mahaladagi_jamijinoyat_soni,
            'doimiy_yashovchilar_soni' => $this->doimiy_yashovchilar_soni,
            'boshqa_mahallada_yashovchilar_soni' => $this->boshqa_mahallada_yashovchilar_soni,
            'boshqa_tumanda_yashovchilar_soni' => $this->boshqa_tumanda_yashovchilar_soni,
            'boshqa_viloyatda_yashovchilar_soni' => $this->boshqa_viloyatda_yashovchilar_soni,
            'chet_el_fuqarosi_soni' => $this->chet_el_fuqarosi_soni,
            'jami_shaxslar_soni' => $this->jami_shaxslar_soni,
            'mfy_id' => $this->mfy_id,
        ]);

        return $dataProvider;
    }
}
