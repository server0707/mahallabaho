<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ijtimoiy_muhit".
 *
 * @property int $id
 * @property int $kamtaminlanganlar_soni
 * @property int $moddiyyordamchilar_soni
 * @property int $nafaqaoluvchilar14_soni
 * @property int $nafaqaoluvchilar2_soni
 * @property int $nogiron_nafaqachilar_soni
 * @property int $oilaviy_ajirim_soni
 * @property int $yosh_ajirimlar_soni
 * @property int $pxt_notinchoila_soni
 * @property int $pxt_giyohvandlar_soni
 * @property int $pxt_qushmachilar_soni
 * @property int $pxt_yengiltabiatayol_soni
 * @property int $pxt_ekstrimistlar_soni
 * @property int $ishsizlar_soni
 * @property int $mfy_id
 *
 * @property Mfy $mfy
 */
class IjtimoiyMuhit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ijtimoiy_muhit';
    }

    public $viloyat_id;
    public $tuman_id;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['viloyat_id','tuman_id','kamtaminlanganlar_soni', 'moddiyyordamchilar_soni', 'nafaqaoluvchilar14_soni', 'nafaqaoluvchilar2_soni', 'nogiron_nafaqachilar_soni', 'oilaviy_ajirim_soni', 'yosh_ajirimlar_soni', 'pxt_notinchoila_soni', 'pxt_giyohvandlar_soni', 'pxt_qushmachilar_soni', 'pxt_yengiltabiatayol_soni', 'pxt_ekstrimistlar_soni', 'ishsizlar_soni', 'mfy_id'], 'required'],
            [['viloyat_id','tuman_id','kamtaminlanganlar_soni', 'moddiyyordamchilar_soni', 'nafaqaoluvchilar14_soni', 'nafaqaoluvchilar2_soni', 'nogiron_nafaqachilar_soni', 'oilaviy_ajirim_soni', 'yosh_ajirimlar_soni', 'pxt_notinchoila_soni', 'pxt_giyohvandlar_soni', 'pxt_qushmachilar_soni', 'pxt_yengiltabiatayol_soni', 'pxt_ekstrimistlar_soni', 'ishsizlar_soni', 'mfy_id'], 'integer'],
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
            'kamtaminlanganlar_soni' => 'Kamtaminlangan oilalar soni',
            'moddiyyordamchilar_soni' => 'Moddiy yordam oluvchilar soni',
            'nafaqaoluvchilar14_soni' => 'Nafaqa oluvchilar soni (14 yoshgacha)',
            'nafaqaoluvchilar2_soni' => 'Nafaqa oluvchilar soni (2 yoshgacha)',
            'nogiron_nafaqachilar_soni' => 'Nogiron nafaqa oluvchilar soni',
            'oilaviy_ajirim_soni' => 'Oilaviy ajrimlar soni',
            'yosh_ajirimlar_soni' => 'Shundan yosh oilalilar ajirimi soni',
            'pxt_notinchoila_soni' => 'Profilaktik hisobda turgan notinch va noqobil oilalar soni',
            'pxt_giyohvandlar_soni' => 'Profilaktik hisobda turgan giyohvandlik va psixotrop moddalar istemol qiluvchilar soni',
            'pxt_qushmachilar_soni' => 'Profilaktik hisobda turgan qo\'shmachilar soni',
            'pxt_yengiltabiatayol_soni' => 'Profilaktik hisobda turgan yengil tabiatli ayollar soni',
            'pxt_ekstrimistlar_soni' => 'Profilaktik hisobda turgan diniy ekstrimistik oqim toifasiga mansub bo\'lganlar soni',
            'ishsizlar_soni' => 'Ishsizlar soni',
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
