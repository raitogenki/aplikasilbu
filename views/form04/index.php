<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Form04Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Form04';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form04-index">

    <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Form04', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'form_id',
            'create_at',
            'update_at',
            'laporan_id',
            'user_id',
            // 'status',
            // 'jenis',
            // 'jenis_valuta',
            // 'jangka_mulai',
            // 'jangka_jatuh_tempo',
            // 'suku_bunga',
            // 'jumlah',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
