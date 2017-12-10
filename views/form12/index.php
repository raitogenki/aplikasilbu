<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Form12Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Form12';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form12-index">

    <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Form12', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'perusahaan_emiten_golongan',
            // 'perusahaan_emiten_status',
            // 'metode_penyertaan',
            // 'negara_tujuan',
            // 'jenis_valuta',
            // 'kualitas',
            // 'tujuan_penyertaan',
            // 'waktu_penyertaan',
            // 'bagian_penyertaan',
            // 'nominal',
            // 'jumlah_bulan_lalu',
            // 'jumlah_debet',
            // 'jumlah_kredit',
            // 'jumlah_lainnya',
            // 'jumlah_bulan_laporan',
            // 'nilai_agunan_diperhitungkan',
            // 'cadangan_kerugian_individu',
            // 'cadangan_kerugian_kolektif',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
