<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Obat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'deskripsi_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga_obat')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary w-100']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>