<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Form36 */

$this->title = 'DAFTAR RINCIAN RUPA-RUPA KEWAJIBAN';
// $this->params['breadcrumbs'][] = ['label' => 'Form36s', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="form36-view">

    <h3 style="text-align: center; margin: 24px 24px;"><?= Html::encode($this->title) ?></h3>
    <div style="border-top: 1px solid #333; margin-bottom: 24px;"></div>

    <!--p>
        <?= Html::a('Update', ['update', 'id' => $model->form_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->form_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p-->

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'form_id',
            // 'create_at',
            // 'update_at',
            // 'laporan_id',
            // 'user_id',
            // 'status',
            'jenis',
            'jenis_valuta',
            'kreditur_golongan',
            'kreditur_hubungan_bank',
            'kreditur_status',
            'suku_bunga',
            'jumlah_bulan_lalu',
            'jumlah_debet',
            'jumlah_kredit',
            'jumlah_lainnya',
            'jumlah_bulan_laporan',
        ],
    ]) ?>

</div>
