<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subscriptions".
 *
 * @property int $id
 * @property int $subscriber
 * @property int $newsletter
 * @property string $subscription_start
 * @property string $subscription_end
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Subscribers $subscriber0
 * @property Newsletters $newsletter0
 */
class Subscriptions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subscriptions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subscriber', 'newsletter', 'subscription_start', 'subscription_end'], 'required'],
            [['subscriber', 'newsletter'], 'integer'],
            [['subscription_start', 'subscription_end', 'created_at', 'updated_at'], 'safe'],
            [['subscriber'], 'exist', 'skipOnError' => true, 'targetClass' => Subscribers::className(), 'targetAttribute' => ['subscriber' => 'id']],
            [['newsletter'], 'exist', 'skipOnError' => true, 'targetClass' => Newsletters::className(), 'targetAttribute' => ['newsletter' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'subscriber' => 'Подписчик',
            'newsletter' => 'Издание',
            'subscription_start' => 'Начало',
            'subscription_end' => 'Конец',
            'created_at' => 'Добавлено',
            'updated_at' => 'Обновлено',
        ];
    }

    /**
     * Gets query for [[Subscriber0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubscriber0()
    {
        return $this->hasOne(Subscribers::className(), ['id' => 'subscriber']);
    }

    /**
     * Gets query for [[Newsletter0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getNewsletter0()
    {
        return $this->hasOne(Newsletters::className(), ['id' => 'newsletter']);
    }
}
