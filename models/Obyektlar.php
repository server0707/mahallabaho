<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obyektlar".
 *
 * @property int $id
 * @property int $guzarlar_soni
 * @property int $internetklub_soni
 * @property int $uquvmarkaz_soni
 * @property int $savdodukon_soni
 * @property int $choyxonalar_soni
 * @property int $tuyxonalar_soni
 * @property int $shifoxonalar_soni
 * @property int $qvplar_soni
 * @property int $fermerliklar_soni
 * @property int $bolalarmaydon_soni
 * @property int $sportmaydon_soni
 * @property int $masjidlar_soni
 * @property int $ziyoratgohlar_soni
 * @property int $qabristonlar_soni
 * @property int $boshqadin_ibodatxona_soni
 * @property int $bozorlar_soni
 * @property int $novvoyxonalar_soni
 * @property int $guzalliksalon_soni
 * @property int $tamirlashustachilik_soni
 * @property int $diqqatli_joylar_soni
 * @property int $kutubxonalar_soni
 * @property int $dorixonalar_soni
 * @property int $hammomlar_soni
 * @property int $mfy_id
 *
 * @property Mfy $mfy
 */
class Obyektlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obyektlar';
    }

    public $viloyat_id;
    public $tuman_id;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['viloyat_id','tuman_id','guzarlar_soni', 'internetklub_soni', 'uquvmarkaz_soni', 'savdodukon_soni', 'choyxonalar_soni', 'tuyxonalar_soni', 'shifoxonalar_soni', 'qvplar_soni', 'fermerliklar_soni', 'bolalarmaydon_soni', 'sportmaydon_soni', 'masjidlar_soni', 'ziyoratgohlar_soni', 'qabristonlar_soni', 'boshqadin_ibodatxona_soni', 'bozorlar_soni', 'novvoyxonalar_soni', 'guzalliksalon_soni', 'tamirlashustachilik_soni', 'diqqatli_joylar_soni', 'kutubxonalar_soni', 'dorixonalar_soni', 'hammomlar_soni', 'mfy_id'], 'required'],
            [['viloyat_id','tuman_id','guzarlar_soni', 'internetklub_soni', 'uquvmarkaz_soni', 'savdodukon_soni', 'choyxonalar_soni', 'tuyxonalar_soni', 'shifoxonalar_soni', 'qvplar_soni', 'fermerliklar_soni', 'bolalarmaydon_soni', 'sportmaydon_soni', 'masjidlar_soni', 'ziyoratgohlar_soni', 'qabristonlar_soni', 'boshqadin_ibodatxona_soni', 'bozorlar_soni', 'novvoyxonalar_soni', 'guzalliksalon_soni', 'tamirlashustachilik_soni', 'diqqatli_joylar_soni', 'kutubxonalar_soni', 'dorixonalar_soni', 'hammomlar_soni', 'mfy_id'], 'integer'],
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
            'guzarlar_soni' => 'Mahalla guzarlari soni',
            'savdodukon_soni' => 'Savdo do\'konlari soni',
            'tuyxonalar_soni' => 'To\'yxonalar soni',
            'choyxonalar_soni' => 'Umumiy ovqatlanish shahobchalari (shu jumladan choyxonalar) soni',
            'internetklub_soni' => 'Internet klublar va hizmatlar soni',
            'uquvmarkaz_soni' => 'O\'qitish va o\'rgatish markazlari soni',
            'shifoxonalar_soni' => 'Shifoxonalar soni',
            'qvplar_soni' => 'Poliklinika(KVP)lar soni',
            'fermerliklar_soni' => 'Fermer xo\'jaliklar soni',
            'bolalarmaydon_soni' => 'Bolalar maydonchasi soni',
            'sportmaydon_soni' => 'Sport maydonchalari soni',
            'masjidlar_soni' => 'Masjidlar soni',
            'boshqadin_ibodatxona_soni' => 'Boshqa din ibodatxonalari soni',
            'ziyoratgohlar_soni' => 'Ziyoratgohlar soni',
            'qabristonlar_soni' => 'Qabristonlar soni',
            'bozorlar_soni' => 'Bozorlar soni',
            'novvoyxonalar_soni' => 'Non ishlab chiqarish korxonalari soni',
            'guzalliksalon_soni' => 'Guzallik salonlari va sartaroshxonalar soni',
            'tamirlashustachilik_soni' => 'Tamirlash-ustachilik obyektlari (oyoq kiyimlari, temirchilik, teleradio uskunalari, tikuvchilik) soni',
            'diqqatli_joylar_soni' => 'Diqqatga sazovor joylar soni',
            'kutubxonalar_soni' => 'Kutubxonalar soni',
            'dorixonalar_soni' => 'Dorixonalar soni',
            'hammomlar_soni' => 'Hammomlar soni',
            'mfy_id' => 'Mahalla fermer yig\'ini',
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
