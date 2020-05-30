<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Newsletters */

$this->title = 'Добавить издание';
$this->params['breadcrumbs'][] = ['label' => 'Издания', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="newsletters-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
