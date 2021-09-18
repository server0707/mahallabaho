<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mfy".
 *
 * @property int $id
 * @property string $nomi
 * @property int $tuman_id
 *
 * @property Tuman $tuman
 */
class Mfy extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mfy';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomi', 'tuman_id'], 'required'],
            [['tuman_id'], 'integer'],
            [['nomi'], 'string', 'max' => 45],
            [['nomi'], 'unique'],
            [['tuman_id'], 'exist', 'skipOnError' => true, 'targetClass' => Tuman::className(), 'targetAttribute' => ['tuman_id' => 'id']],
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
            'tuman_id' => 'Tuman',
        ];
    }

    /**
     * Gets query for [[Tuman]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTuman()
    {
        return $this->hasOne(Tuman::className(), ['id' => 'tuman_id']);
    }
}
