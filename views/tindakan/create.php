<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tindakan $model */

$this->title = 'Buat Tindakan';
?>
<div class="tindakan-create">
    <div class="container my-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h1><?= Html::encode($this->title) ?></h1>

                        <?= $this->render('_form', [
                        'model' => $model,
                        ]) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>