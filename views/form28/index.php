<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Form28Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Form28s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form28-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Form28', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'nomer_referensi_transaksi',
            // 'jenis',
            // 'kontrak',
            // 'jenis_valuta',
            // 'variabel_mendasar',
            // 'pihak_lawan_golongan',
            // 'pihak_lawan_hubungan_bank',
            // 'pihak_lawan_status',
            // 'negara_pihak_lawan',
            // 'jumlah_kewajiban_bulan_lalu',
            // 'jumlah_kewajiban_bulan_',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
