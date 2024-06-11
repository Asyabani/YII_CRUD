<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Trx $model */

$this->title = 'Update Trx: ' . $model->id_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Trx', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pasien, 'url' => ['view', 'id_pasien' => $model->id_pasien]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="trx-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>