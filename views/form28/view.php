<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Form28 */

$this->title = 'DAFTAR RINCIAN KEWAJIBAN SPOT DAN DERIVATIF';
// $this->params['breadcrumbs'][] = ['label' => 'Form28s', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="form28-view">

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
            'nomer_referensi_transaksi',
            'jenis',
            'kontrak',
            'jenis_valuta',
            'variabel_mendasar',
            'pihak_lawan_golongan',
            'pihak_lawan_hubungan_bank',
            'pihak_lawan_status',
            'negara_pihak_lawan',
            'jumlah_kewajiban_bulan_lalu',
            'jumlah_kewajiban_bulan_',
        ],
    ]) ?>

</div>
