<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tuman".
 *
 * @property int $id
 * @property string $nomi
 * @property int $viloyat_id
 *
 * @property Mfy[] $mfies
 * @property Viloyat $viloyat
 */
class Tuman extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tuman';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi', 'viloyat_id'], 'required'],
            [['viloyat_id'], 'integer'],
            [['nomi'], 'string', 'max' => 255],
            [['nomi'], 'unique'],
            [['viloyat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Viloyat::className(), 'targetAttribute' => ['viloyat_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomi' => 'Nomi',
            'viloyat_id' => 'Viloyat',
        ];
    }

    /**
     * Gets query for [[Mfies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMfies()
    {
        return $this->hasMany(Mfy::className(), ['tuman_id' => 'id']);
    }

    /**
     * Gets query for [[Viloyat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getViloyat()
    {
        return $this->hasOne(Viloyat::className(), ['id' => 'viloyat_id']);
    }
}
