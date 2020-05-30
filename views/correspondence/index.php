<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CorrespondenceSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Корреспонденция';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="correspondence-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

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

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
