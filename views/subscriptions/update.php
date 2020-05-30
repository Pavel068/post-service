<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subscriptions */

$this->title = 'Обновить подписку: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Подписки', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="subscriptions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
