<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Correspondence */

$this->title = 'Обновить корреспонденцию: ' . $model->code;
$this->params['breadcrumbs'][] = ['label' => 'Корреспонденция', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Обновить';
?>
<div class="correspondence-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
