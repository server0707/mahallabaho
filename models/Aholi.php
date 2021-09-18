<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "aholi".
 *
 * @property int $id
 * @property int $xujaliklar_soni
 * @property int $oilalar_soni
 * @property int $erkaklar_soni
 * @property int $ayollar_soni
 * @property int $jami_aholi_soni
 * @property int $yosh_bolalar_soni
 * @property int $uspirinlar_soni
 * @property int $voyaga_yetmaganlar_soni
 * @property int $voyaga_yetganlar_soni
 * @property int $jami_yoshlar_soni
 * @property int $boquvchisini_yuqotgan_oilalar_soni
 * @property int $yolgiz_keksalar_soni
 * @property int $nogironlar_soni
 * @property int $urush_faxriylar_soni
 * @property int $pensiyanerlar_soni
 * @property int $yuzdan_oshganlar_soni
 * @property int $mfy_id
 *
 * @property Mfy $mfy
 */
class Aholi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'aholi';
    }

    public $viloyat_id;
    public $tuman_id;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['viloyat_id','tuman_id','xujaliklar_soni', 'oilalar_soni', 'erkaklar_soni', 'ayollar_soni', 'jami_aholi_soni', 'yosh_bolalar_soni', 'uspirinlar_soni', 'voyaga_yetmaganlar_soni', 'voyaga_yetganlar_soni', 'jami_yoshlar_soni', 'boquvchisini_yuqotgan_oilalar_soni', 'yolgiz_keksalar_soni', 'nogironlar_soni', 'urush_faxriylar_soni', 'pensiyanerlar_soni', 'yuzdan_oshganlar_soni', 'mfy_id'], 'required'],
            [['viloyat_id','tuman_id','xujaliklar_soni', 'oilalar_soni', 'erkaklar_soni', 'ayollar_soni', 'jami_aholi_soni', 'yosh_bolalar_soni', 'uspirinlar_soni', 'voyaga_yetmaganlar_soni', 'voyaga_yetganlar_soni', 'jami_yoshlar_soni', 'boquvchisini_yuqotgan_oilalar_soni', 'yolgiz_keksalar_soni', 'nogironlar_soni', 'urush_faxriylar_soni', 'pensiyanerlar_soni', 'yuzdan_oshganlar_soni', 'mfy_id'], 'integer'],
            [['mfy_id'], 'exist', 'skipOnError' => true, 'targetClass' => Mfy::className(), 'targetAttribute' => ['mfy_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'xujaliklar_soni' => 'Xujaliklar soni',
            'oilalar_soni' => 'Oilalar soni',
            'erkaklar_soni' => 'Erkaklar soni',
            'ayollar_soni' => 'Ayollar soni',
            'jami_aholi_soni' => 'Jami aholi soni',
            'yosh_bolalar_soni' => 'Yosh bolalar soni (7 yoshgacha)',
            'uspirinlar_soni' => 'Bolalar va o\'spirinlar soni (7 yoshdan 16 yoshgacha)',
            'voyaga_yetmaganlar_soni' => 'Voyaga yetmaganlar soni (16 yoshdan 18 yoshgacha)',
            'voyaga_yetganlar_soni' => 'Voyaga yetgan yoshlar soni (18 yoshdan 30 yoshgacha)',
            'jami_yoshlar_soni' => 'Shu jumladan, voyaga yetmaganlar va yoshlar soni(30 yoshgacha)',
            'boquvchisini_yuqotgan_oilalar_soni' => 'Boquvchisini yo\'qotgan oilalar soni',
            'yolgiz_keksalar_soni' => 'Yakka yolg\'iz keksalar soni',
            'nogironlar_soni' => 'Nogironlar soni',
            'urush_faxriylar_soni' => 'Urush faxriylar soni',
            'pensiyanerlar_soni' => 'Pensiyanerlar soni',
            'yuzdan_oshganlar_soni' => 'Yuzdan oshganlar soni',
            'mfy_id' => 'Mahalla fuqarolar yig\'ini',
            'viloyat_id' => 'Viloyat',
            'tuman_id' => 'Tuman',
        ];
    }

    /**
     * Gets query for [[Mfy]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMfy()
    {
        return $this->hasOne(Mfy::className(), ['id' => 'mfy_id']);
    }
}
