<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Form28 */

$this->title = $model->form_id;
$this->params['breadcrumbs'][] = ['label' => 'Form28s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form28-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->form_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->form_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'form_id',
            'create_at',
            'update_at',
            'laporan_id',
            'user_id',
            'status',
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
