<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Form28Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form28-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'form_id') ?>

    <?= $form->field($model, 'create_at') ?>

    <?= $form->field($model, 'update_at') ?>

    <?= $form->field($model, 'laporan_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'nomer_referensi_transaksi') ?>

    <?php // echo $form->field($model, 'jenis') ?>

    <?php // echo $form->field($model, 'kontrak') ?>

    <?php // echo $form->field($model, 'jenis_valuta') ?>

    <?php // echo $form->field($model, 'variabel_mendasar') ?>

    <?php // echo $form->field($model, 'pihak_lawan_golongan') ?>

    <?php // echo $form->field($model, 'pihak_lawan_hubungan_bank') ?>

    <?php // echo $form->field($model, 'pihak_lawan_status') ?>

    <?php // echo $form->field($model, 'negara_pihak_lawan') ?>

    <?php // echo $form->field($model, 'jumlah_kewajiban_bulan_lalu') ?>

    <?php // echo $form->field($model, 'jumlah_kewajiban_bulan_') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
