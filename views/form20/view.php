<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Form20 */

$this->title = 'DAFTAR RINCIAN ASET ANTAR KANTOR PADA KANTOR YANG MELAKUKAN KEGIATAN OPERASIONAL DI LUAR INDONESIA';
// $this->params['breadcrumbs'][] = ['label' => 'Form20s', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="form20-view">

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
            'sandi_kantor',
            'jenis',
            'jenis_valuta',
            'suku_bunga',
            'jumlah_bulan_lalu',
            'jumlah_debet',
            'jumlah_kredit',
            'jumlah_lainnya',
            'jumlah_bulan_laporan',
        ],
    ]) ?>

</div>
