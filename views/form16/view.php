<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Form16 */

$this->title = $model->form_id;
$this->params['breadcrumbs'][] = ['label' => 'Form16s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form16-view">

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
            'jenis',
            'tanggal_penetapan',
            'jenis_valuta',
            'metode_pengukuran',
            'biaya_perolehan',
            'cadangan_kerugian',
            'akumulasi_penyusutan',
            'jumlah',
            'kualitas',
            'ppanp_dibentuk',
        ],
    ]) ?>

</div>
