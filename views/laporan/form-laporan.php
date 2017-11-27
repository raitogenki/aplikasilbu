<?php
use yii\helpers\Html;
//Menampilkan daftar form yang bisa dibuat
?>
<h2>Form Laporan</h2>
<table class="table table-bordered">
    <tr>
        <th>Nama Laporan</th>
        <th>Status</th>
        <th></th>
    </tr>
    <tr>
        <td>Form 04 - Daftar Rincian Penempatan Pada Bank Indonesia</td>
        <td>Status</td>
        <td>
        <?= Html::a('<span class="glyphicon glyphicon-plus"></span>', $url=null, 
                ['title' => Yii::t('yii', 'Create'),]) ?>
        <?= Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url=null, 
                ['title' => Yii::t('yii', 'View'),]) ?>
        <?= Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url=null, 
                ['title' => Yii::t('yii', 'Update'),]) ?>
        <?= Html::a('<span class="glyphicon glyphicon-trash"></span>', $url=null, 
                ['title' => Yii::t('yii', 'Delete'),]) ?>
        </td>
    </tr>
</table>

