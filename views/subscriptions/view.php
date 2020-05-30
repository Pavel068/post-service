<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Subscriptions */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Подписки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="subscriptions-view">

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
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
