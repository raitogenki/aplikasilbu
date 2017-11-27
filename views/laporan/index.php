<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LaporanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Laporan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'laporan_id',
            'date',
            'create_at',
            'update_at',
            'user_id',
            // 'status',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{form-laporan}{view}{update}{delete}',
                'buttons' => [
                    'form-laporan' => function ($url, $model) {     
                        return Html::a('<span class="glyphicon glyphicon-list"></span>', $url, [
                                'title' => Yii::t('yii', 'Formulir Laporan'),
                        ]);
                    }
                ]
            ],
        ],
    ]); ?>
</div>
