<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Laporan */

$this->title = 'View Laporan: ' . $model->laporan_id;
// $this->params['breadcrumbs'][] = ['label' => 'Laporan', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-view">

    <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>

    <!--p>
        <?= Html::a('Update', ['update', 'id' => $model->laporan_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->laporan_id], [
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
            // 'laporan_id',
            'bulan',
            'tahun',
            // 'create_at',
            // 'update_at',
            // 'user_id',
            'status',
        ],
    ]) ?>

</div>
