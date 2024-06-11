<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tindakan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tindakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biaya_tindakan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Buat Tindakan', ['class' => 'btn btn-primary w-100']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>