<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Correspondence */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Корреспонденция', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="correspondence-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверены?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'code',
            [
                'attribute' => 'corr_type',
                'value' => function ($model) {
                    switch ($model->corr_type) {
                        case 'input':
                            return 'Входящее';
                        case 'output':
                            return 'Исходящее';
                        default:
                            return '';
                    }
                }
            ],
            [
                'attribute' => 'entity_type',
                'value' => function ($model) {
                    switch ($model->entity_type) {
                        case 'package':
                            return 'Посылка';
                        case 'letter':
                            return 'Письмо';
                        case 'parcel':
                            return 'Бандероль';
                        default:
                            return '';
                    }
                }
            ],
            'sender_info:ntext',
            'receiver_info:ntext',
            'postal_value',
            'weight',
            [
                'attribute' => 'check_receive',
                'value' => function ($model) {
                    return $model->check_receive ? 'Да' : 'Нет';
                }
            ],
            [
                'attribute' => 'is_received',
                'value' => function ($model) {
                    if (!$model->check_receive)
                        return '';

                    return $model->is_received ? 'Да' : 'Нет';
                }
            ],
        ],
    ]) ?>

</div>
