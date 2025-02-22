<?php

use app\models\admin\DataPasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\admin\DataPasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="data-pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Data Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pasien',
            'nama_pasien',
            'alamat_pasien',
            'tanggal_lahir_pasien',
            'created_at',
            //'updated_at',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, DataPasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pasien' => $model->id_pasien]);
                 }
            ],
        ],
    ]); ?>


</div>
