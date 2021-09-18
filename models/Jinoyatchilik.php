<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jinoyatchilik".
 *
 * @property int $id
 * @property int $aniqlangan_jinoyat_soni
 * @property int $ehtiyotsiz_jinoyat_soni
 * @property int $iqtisodiy_jinoyat_soni
 * @property int $kasbiy_jinoyat_soni
 * @property int $maxsus_jinoyat_soni
 * @property int $jami_jinoyat_soni
 * @property int $qasddan_odamuldirish_soni
 * @property int $ogirshikast_yetkazish_soni
 * @property int $ortashikast_yetkazish_soni
 * @property int $yengilshikast_yetkazish_soni
 * @property int $nomusga_tegish_soni
 * @property int $bosqinchilik_soni
 * @property int $talonchilik_soni
 * @property int $ugrilik_soni
 * @property int $giyohvandlik_soni
 * @property int $bezorilik_soni
 * @property int $boshqajinoyat_soni
 * @property int $mahaladagi_jamijinoyat_soni
 * @property int $doimiy_yashovchilar_soni
 * @property int $boshqa_mahallada_yashovchilar_soni
 * @property int $boshqa_tumanda_yashovchilar_soni
 * @property int $boshqa_viloyatda_yashovchilar_soni
 * @property int $chet_el_fuqarosi_soni
 * @property int $jami_shaxslar_soni
 * @property int $mfy_id
 *
 * @property Mfy $mfy
 */
class Jinoyatchilik extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jinoyatchilik';
    }

    public $viloyat_id;
    public $tuman_id;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['viloyat_id','tuman_id','aniqlangan_jinoyat_soni', 'ehtiyotsiz_jinoyat_soni', 'iqtisodiy_jinoyat_soni', 'kasbiy_jinoyat_soni', 'maxsus_jinoyat_soni', 'jami_jinoyat_soni', 'qasddan_odamuldirish_soni', 'ogirshikast_yetkazish_soni', 'ortashikast_yetkazish_soni', 'yengilshikast_yetkazish_soni', 'nomusga_tegish_soni', 'bosqinchilik_soni', 'talonchilik_soni', 'ugrilik_soni', 'giyohvandlik_soni', 'bezorilik_soni', 'boshqajinoyat_soni', 'mahaladagi_jamijinoyat_soni', 'doimiy_yashovchilar_soni', 'boshqa_mahallada_yashovchilar_soni', 'boshqa_tumanda_yashovchilar_soni', 'boshqa_viloyatda_yashovchilar_soni', 'chet_el_fuqarosi_soni', 'jami_shaxslar_soni', 'mfy_id'], 'required'],
            [['viloyat_id','tuman_id','aniqlangan_jinoyat_soni', 'ehtiyotsiz_jinoyat_soni', 'iqtisodiy_jinoyat_soni', 'kasbiy_jinoyat_soni', 'maxsus_jinoyat_soni', 'jami_jinoyat_soni', 'qasddan_odamuldirish_soni', 'ogirshikast_yetkazish_soni', 'ortashikast_yetkazish_soni', 'yengilshikast_yetkazish_soni', 'nomusga_tegish_soni', 'bosqinchilik_soni', 'talonchilik_soni', 'ugrilik_soni', 'giyohvandlik_soni', 'bezorilik_soni', 'boshqajinoyat_soni', 'mahaladagi_jamijinoyat_soni', 'doimiy_yashovchilar_soni', 'boshqa_mahallada_yashovchilar_soni', 'boshqa_tumanda_yashovchilar_soni', 'boshqa_viloyatda_yashovchilar_soni', 'chet_el_fuqarosi_soni', 'jami_shaxslar_soni', 'mfy_id'], 'integer'],
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
            'aniqlangan_jinoyat_soni' => 'Aniqlangan jinoyat soni',
            'ehtiyotsiz_jinoyat_soni' => 'Ehtiyotsizlik oqibatida sodir etilgan jinoyat soni',
            'iqtisodiy_jinoyat_soni' => 'Iqtisodiyot va hokimiyat organlarining faoliyati bilan bog\'liq jinoyatlar soni',
            'kasbiy_jinoyat_soni' => 'Kasbiy yoki hizmat vazifasini bajarish (shu jumladan, harbiy hizmat o\'tash tartibi) bilan bog\'liq jinoyatlar soni',
            'maxsus_jinoyat_soni' => 'Maxsus obektlarda (JIEM, chegara, bojxona) sodir etilgan jinoyatlar soni',
            'jami_jinoyat_soni' => 'Jami sodir etilgan jinoyat soni',
            'qasddan_odamuldirish_soni' => 'Qasddan odam o\'ldirish soni',
            'ogirshikast_yetkazish_soni' => 'Qasddan badanga og\'ir shikast yetkazish soni',
            'ortashikast_yetkazish_soni' => 'Qasddan badanga o\'rta shikast yetkazish soni',
            'yengilshikast_yetkazish_soni' => 'Qasddan badanga yengil shikast yetkazish soni',
            'nomusga_tegish_soni' => 'Nomusga tegish soni',
            'bosqinchilik_soni' => 'Bosqinchilik soni',
            'talonchilik_soni' => 'Talonchilik soni',
            'ugrilik_soni' => 'O\'grilik soni',
            'giyohvandlik_soni' => 'Giyohvandlik soni',
            'bezorilik_soni' => 'Bezorilik soni',
            'boshqajinoyat_soni' => 'Boshqa turdagi jinoyatlar soni',
            'mahaladagi_jamijinoyat_soni' => 'Mahaladagi Jamijinoyat soni',
            'doimiy_yashovchilar_soni' => 'Mahalla hududida doimiy yashovchilar soni',
            'boshqa_mahallada_yashovchilar_soni' => 'Tumanning boshqa mahallasida yashovchilar soni',
            'boshqa_tumanda_yashovchilar_soni' => 'Boshqa shahar/tumanda yashovchilar soni',
            'boshqa_viloyatda_yashovchilar_soni' => 'Boshqa Viloyatda yashovchilar soni',
            'chet_el_fuqarosi_soni' => 'Chet el fuqarolari soni',
            'jami_shaxslar_soni' => 'Jami ishtirok etgan shaxslar soni',
            'mfy_id' => 'Mahalla fermerlar yig\'ini',
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
