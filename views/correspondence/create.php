<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Correspondence */

$this->title = 'Добавить корреспонденцию';
$this->params['breadcrumbs'][] = ['label' => 'Корреспонденция', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="correspondence-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
