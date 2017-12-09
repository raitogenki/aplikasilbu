<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Form36Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Form36s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form36-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Form36', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'kreditur_golongan',
            // 'kreditur_hubungan_bank',
            // 'kreditur_status',
            // 'suku_bunga',
            // 'jumlah_bulan_lalu',
            // 'jumlah_debet',
            // 'jumlah_kredit',
            // 'jumlah_lainnya',
            // 'jumlah_bulan_laporan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
