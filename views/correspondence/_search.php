<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CorrespondenceSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="correspondence-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'code') ?>

    <?= $form->field($model, 'corr_type') ?>

    <?= $form->field($model, 'entity_type') ?>

    <?= $form->field($model, 'sender_info') ?>

    <?php // echo $form->field($model, 'receiver_info') ?>

    <?php // echo $form->field($model, 'postal_value') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'check_receive') ?>

    <?php // echo $form->field($model, 'is_received') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
