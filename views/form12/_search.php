<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Form12Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form12-search">

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

    <?php // echo $form->field($model, 'perusahaan_emiten_golongan') ?>

    <?php // echo $form->field($model, 'perusahaan_emiten_status') ?>

    <?php // echo $form->field($model, 'metode_penyertaan') ?>

    <?php // echo $form->field($model, 'negara_tujuan') ?>

    <?php // echo $form->field($model, 'jenis_valuta') ?>

    <?php // echo $form->field($model, 'kualitas') ?>

    <?php // echo $form->field($model, 'tujuan_penyertaan') ?>

    <?php // echo $form->field($model, 'waktu_penyertaan') ?>

    <?php // echo $form->field($model, 'bagian_penyertaan') ?>

    <?php // echo $form->field($model, 'nominal') ?>

    <?php // echo $form->field($model, 'jumlah_bulan_lalu') ?>

    <?php // echo $form->field($model, 'jumlah_debet') ?>

    <?php // echo $form->field($model, 'jumlah_kredit') ?>

    <?php // echo $form->field($model, 'jumlah_lainnya') ?>

    <?php // echo $form->field($model, 'jumlah_bulan_laporan') ?>

    <?php // echo $form->field($model, 'nilai_agunan_diperhitungkan') ?>

    <?php // echo $form->field($model, 'cadangan_kerugian_individu') ?>

    <?php // echo $form->field($model, 'cadangan_kerugian_kolektif') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
