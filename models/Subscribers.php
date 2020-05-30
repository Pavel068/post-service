<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subscribers".
 *
 * @property int $id
 * @property string $code
 * @property string $first_name
 * @property string $last_name
 * @property string|null $patronum
 * @property string $address
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Subscriptions[] $subscriptions
 */
class Subscribers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subscribers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'first_name', 'last_name', 'address'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['code', 'first_name', 'last_name', 'patronum'], 'string', 'max' => 255],
            [['address'], 'string', 'max' => 1024],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Код',
            'first_name' => 'Имя',
            'last_name' => 'Фамилия',
            'patronum' => 'Отчество',
            'address' => 'Адрес',
            'created_at' => 'Добавлено',
            'updated_at' => 'Обновлено',
        ];
    }

    /**
     * Gets query for [[Subscriptions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubscriptions()
    {
        return $this->hasMany(Subscriptions::className(), ['subscriber' => 'id']);
    }
}
