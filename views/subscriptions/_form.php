<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subscriptions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subscriptions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subscriber')->dropDownList(ArrayHelper::map(\app\models\Subscribers::find()->all(), 'id', 'code')); ?>

    <?= $form->field($model, 'newsletter')->dropDownList(ArrayHelper::map(\app\models\Newsletters::find()->all(), 'id', 'cipher')); ?>

    <?= $form->field($model, 'subscription_start')->widget(\yii\jui\DatePicker::classname(), [
        'options' => ['class' => 'form-control'],
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <?= $form->field($model, 'subscription_end')->widget(\yii\jui\DatePicker::classname(), [
        'options' => ['class' => 'form-control'],
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
