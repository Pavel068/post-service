<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "correspondence".
 *
 * @property int $id
 * @property string $code
 * @property string $corr_type
 * @property string $entity_type
 * @property string $sender_info
 * @property string $receiver_info
 * @property float $postal_value
 * @property float $weight
 * @property int $check_receive
 * @property int|null $is_received
 */
class Correspondence extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'correspondence';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['code', 'corr_type', 'entity_type', 'sender_info', 'receiver_info', 'postal_value', 'weight'], 'required'],
            [['corr_type', 'entity_type', 'sender_info', 'receiver_info'], 'string'],
            [['postal_value', 'weight'], 'number'],
            [['check_receive', 'is_received'], 'integer'],
            [['code'], 'string', 'max' => 255],
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
            'corr_type' => 'Тип', // Входящая, выходящая
            'entity_type' => 'Тип посылки',
            'sender_info' => 'Отправитель',
            'receiver_info' => 'Получатель',
            'postal_value' => 'Ценность',
            'weight' => 'Вес',
            'check_receive' => 'Отметка о вручении',
            'is_received' => 'Вручено',
        ];
    }
}
