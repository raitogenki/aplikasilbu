<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Form12 */

$this->title = $model->form_id;
$this->params['breadcrumbs'][] = ['label' => 'Form12s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form12-view">

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
            'perusahaan_emiten_golongan',
            'perusahaan_emiten_status',
            'metode_penyertaan',
            'negara_tujuan',
            'jenis_valuta',
            'kualitas',
            'tujuan_penyertaan',
            'waktu_penyertaan',
            'bagian_penyertaan',
            'nominal',
            'jumlah_bulan_lalu',
            'jumlah_debet',
            'jumlah_kredit',
            'jumlah_lainnya',
            'jumlah_bulan_laporan',
            'nilai_agunan_diperhitungkan',
            'cadangan_kerugian_individu',
            'cadangan_kerugian_kolektif',
        ],
    ]) ?>

</div>
