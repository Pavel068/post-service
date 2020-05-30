<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SubscriptionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Подписки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscriptions-index">

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
            [
                'attribute' => 'subscriber',
                'value' => function ($model) {
                    return \app\models\Subscribers::find()->select('code')->where(['id' => $model->subscriber])->scalar();
                }
            ],
            [
                'attribute' => 'newsletter',
                'value' => function ($model) {
                    return \app\models\Newsletters::find()->select('cipher')->where(['id' => $model->newsletter])->scalar();
                }
            ],
            'subscription_start',
            'subscription_end',
            //'created_at',
            //'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
