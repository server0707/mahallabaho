<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\IjtimoiyMuhit;

/**
 * IjtimoiyMuhitSearch represents the model behind the search form of `app\models\IjtimoiyMuhit`.
 */
class IjtimoiyMuhitSearch extends IjtimoiyMuhit
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kamtaminlanganlar_soni', 'moddiyyordamchilar_soni', 'nafaqaoluvchilar14_soni', 'nafaqaoluvchilar2_soni', 'nogiron_nafaqachilar_soni', 'oilaviy_ajirim_soni', 'yosh_ajirimlar_soni', 'pxt_notinchoila_soni', 'pxt_giyohvandlar_soni', 'pxt_qushmachilar_soni', 'pxt_yengiltabiatayol_soni', 'pxt_ekstrimistlar_soni', 'ishsizlar_soni', 'mfy_id'], 'integer'],
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
        $query = IjtimoiyMuhit::find();

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
            'kamtaminlanganlar_soni' => $this->kamtaminlanganlar_soni,
            'moddiyyordamchilar_soni' => $this->moddiyyordamchilar_soni,
            'nafaqaoluvchilar14_soni' => $this->nafaqaoluvchilar14_soni,
            'nafaqaoluvchilar2_soni' => $this->nafaqaoluvchilar2_soni,
            'nogiron_nafaqachilar_soni' => $this->nogiron_nafaqachilar_soni,
            'oilaviy_ajirim_soni' => $this->oilaviy_ajirim_soni,
            'yosh_ajirimlar_soni' => $this->yosh_ajirimlar_soni,
            'pxt_notinchoila_soni' => $this->pxt_notinchoila_soni,
            'pxt_giyohvandlar_soni' => $this->pxt_giyohvandlar_soni,
            'pxt_qushmachilar_soni' => $this->pxt_qushmachilar_soni,
            'pxt_yengiltabiatayol_soni' => $this->pxt_yengiltabiatayol_soni,
            'pxt_ekstrimistlar_soni' => $this->pxt_ekstrimistlar_soni,
            'ishsizlar_soni' => $this->ishsizlar_soni,
            'mfy_id' => $this->mfy_id,
        ]);

        return $dataProvider;
    }
}
