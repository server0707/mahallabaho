<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "viloyat".
 *
 * @property int $id
 * @property string $nomi
 *
 * @property Tuman[] $tumen
 */
class Viloyat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'viloyat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi'], 'required'],
            [['nomi'], 'unique'],
            [['nomi'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * Gets query for [[Tumen]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTumen()
    {
        return $this->hasMany(Tuman::className(), ['viloyat_id' => 'id']);
    }
}
