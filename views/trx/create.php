<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Trx $model */

$this->title = 'Create Trx';
$this->params['breadcrumbs'][] = ['label' => 'Trxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="trx-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
