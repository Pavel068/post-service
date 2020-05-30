<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Correspondence */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="correspondence-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'corr_type')->dropDownList([ 'input' => 'Входящее', 'output' => 'Исходящее', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'entity_type')->dropDownList([ 'package' => 'Посылка', 'letter' => 'Письмо', 'parcel' => 'Бандероль', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'sender_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'receiver_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'postal_value')->textInput() ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'check_receive')->checkbox() ?>

    <?= $form->field($model, 'is_received')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
