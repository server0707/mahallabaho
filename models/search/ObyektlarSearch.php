<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Obyektlar;

/**
 * ObyektlarSearch represents the model behind the search form of `app\models\Obyektlar`.
 */
class ObyektlarSearch extends Obyektlar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'guzarlar_soni', 'internetklub_soni', 'uquvmarkaz_soni', 'savdodukon_soni', 'choyxonalar_soni', 'tuyxonalar_soni', 'shifoxonalar_soni', 'qvplar_soni', 'fermerliklar_soni', 'bolalarmaydon_soni', 'sportmaydon_soni', 'masjidlar_soni', 'ziyoratgohlar_soni', 'qabristonlar_soni', 'boshqadin_ibodatxona_soni', 'bozorlar_soni', 'novvoyxonalar_soni', 'guzalliksalon_soni', 'tamirlashustachilik_soni', 'diqqatli_joylar_soni', 'kutubxonalar_soni', 'dorixonalar_soni', 'hammomlar_soni', 'mfy_id'], 'integer'],
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
        $query = Obyektlar::find();

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
            'guzarlar_soni' => $this->guzarlar_soni,
            'internetklub_soni' => $this->internetklub_soni,
            'uquvmarkaz_soni' => $this->uquvmarkaz_soni,
            'savdodukon_soni' => $this->savdodukon_soni,
            'choyxonalar_soni' => $this->choyxonalar_soni,
            'tuyxonalar_soni' => $this->tuyxonalar_soni,
            'shifoxonalar_soni' => $this->shifoxonalar_soni,
            'qvplar_soni' => $this->qvplar_soni,
            'fermerliklar_soni' => $this->fermerliklar_soni,
            'bolalarmaydon_soni' => $this->bolalarmaydon_soni,
            'sportmaydon_soni' => $this->sportmaydon_soni,
            'masjidlar_soni' => $this->masjidlar_soni,
            'ziyoratgohlar_soni' => $this->ziyoratgohlar_soni,
            'qabristonlar_soni' => $this->qabristonlar_soni,
            'boshqadin_ibodatxona_soni' => $this->boshqadin_ibodatxona_soni,
            'bozorlar_soni' => $this->bozorlar_soni,
            'novvoyxonalar_soni' => $this->novvoyxonalar_soni,
            'guzalliksalon_soni' => $this->guzalliksalon_soni,
            'tamirlashustachilik_soni' => $this->tamirlashustachilik_soni,
            'diqqatli_joylar_soni' => $this->diqqatli_joylar_soni,
            'kutubxonalar_soni' => $this->kutubxonalar_soni,
            'dorixonalar_soni' => $this->dorixonalar_soni,
            'hammomlar_soni' => $this->hammomlar_soni,
            'mfy_id' => $this->mfy_id,
        ]);

        return $dataProvider;
    }
}
