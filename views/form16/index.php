<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Form16Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Form16s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form16-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Form16', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'tanggal_penetapan',
            // 'jenis_valuta',
            // 'metode_pengukuran',
            // 'biaya_perolehan',
            // 'cadangan_kerugian',
            // 'akumulasi_penyusutan',
            // 'jumlah',
            // 'kualitas',
            // 'ppanp_dibentuk',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
