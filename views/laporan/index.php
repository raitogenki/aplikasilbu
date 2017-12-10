<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LaporanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan ' . Yii::$app->user->identity->cabang;
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-index">

    <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p style="text-align: center">
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

            //'laporan_id',
            'bulan',
            'tahun',
            //'create_at',
            //'update_at',
            //'user_id',
            'status',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{form-list} {view} {update} {approve} {delete}',
                'visibleButtons' => [
                    'update' => Yii::$app->user->identity->role == 'Operator',
                    'approve' => Yii::$app->user->identity->role == 'Supervisor',
                    'delete' => Yii::$app->user->identity->role == 'Supervisor',
                    //'print' => Yii::$app->user->identity->role == 'Operator'
                ],
                'buttons' => [
                    'form-list' => function ($url, $model) {     
                        return Html::a('<span class="glyphicon glyphicon-duplicate"></span>', $url, [
                                'title' => Yii::t('yii', 'Form'),
                        ]);
                    },
                    'approve' => function ($url, $model) {     
                        return Html::a('<span class="glyphicon glyphicon-check"></span>', ['laporan/approve', 'id' => $model->laporan_id], [
                                'title' => Yii::t('yii', 'Approve'),
                                'data' => [
                                    'confirm' => 'Are you sure you want to approve this item?'
                                ],
                        ]);
                    },
                    // 'print' => function ($url, $model) {     
                    //     return Html::a('<span class="glyphicon glyphicon-print"></span>', $url, [
                    //             'title' => Yii::t('yii', 'Print'),
                    //     ]);
                    // }
                ]
            ],
        ],
    ]); ?>
</div>
