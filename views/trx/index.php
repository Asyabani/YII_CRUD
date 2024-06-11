<?php

use app\models\Trx;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TrxSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Trx';
?>
<div class="trx-index">
    <!-- form -->
    <div class="container my-5 flex-grow-1">
        <div class="row">
            <div class="card shadow">
                <div class="card-body my-3">
                    <!-- <h6>Cek Transaksi</h6> -->
                    <?php 
                        echo $this->render('_search', ['model' => $searchModel]); 
                        ?>
                </div>
            </div>
        </div>
    </div>




    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pasien',
            'id_transaksi',
            'status_transaksi',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Trx $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pasien' => $model->id_pasien]);
                 }
            ],
        ],
    ]); ?>


</div>