<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "newsletters".
 *
 * @property int $id
 * @property string $cipher
 * @property string $name
 * @property float $month_price
 *
 * @property Subscriptions[] $subscriptions
 */
class Newsletters extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'newsletters';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cipher', 'name', 'month_price'], 'required'],
            [['month_price'], 'number'],
            [['cipher', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cipher' => 'Шифр',
            'name' => 'Название',
            'month_price' => 'Стоимость подписки',
        ];
    }

    /**
     * Gets query for [[Subscriptions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubscriptions()
    {
        return $this->hasMany(Subscriptions::className(), ['newsletter' => 'id']);
    }
}
