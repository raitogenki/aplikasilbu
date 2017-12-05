<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LaporanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php 
            if (Yii::$app->user->identity->role == 'Operator'){
                echo Html::a('Create Laporan', ['create'], ['class' => 'btn btn-success']);
            }
        ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'laporan_id',
            'bulan',
            'tahun',
            //'create_at',
            //'update_at',
            //'user_id',
            'status',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{form-list} {view} {update} {delete} {print}',
                'visibleButtons' => [
                    //'approve' => Yii::$app->user->identity->role == 'Supervisor',
                    'delete' => Yii::$app->user->identity->role == 'Supervisor',
                    'print' => Yii::$app->user->identity->role == 'Supervisor'
                ],
                'buttons' => [
                    'form-list' => function ($url, $model) {     
                        return Html::a('<span class="glyphicon glyphicon-duplicate"></span>', $url, [
                                'title' => Yii::t('yii', 'Form'),
                        ]);
                    },
                    // 'approve' => function ($url, $model) {     
                    //     return Html::a('<span class="glyphicon glyphicon-ok"></span>', $url, [
                    //             'title' => Yii::t('yii', 'Approve'),
                    //     ]);
                    // },
                    'print' => function ($url, $model) {     
                        return Html::a('<span class="glyphicon glyphicon-print"></span>', $url, [
                                'title' => Yii::t('yii', 'Print'),
                        ]);
                    }
                ]
            ],
        ],
    ]); ?>
</div>
