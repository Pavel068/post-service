<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subscriptions */

$this->title = 'Добавить подписку';
$this->params['breadcrumbs'][] = ['label' => 'Подписки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subscriptions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
