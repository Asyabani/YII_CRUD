<?php

use app\models\Tindakan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\TindakanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Tindakans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tindakan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tindakan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tindakan',
            'tindakan',
            'deskripsi_tindakan',
            'biaya_tindakan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tindakan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_tindakan' => $model->id_tindakan]);
                 }
            ],
        ],
    ]); ?>


</div>
