<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Form20Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form20-search">

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

    <?php // echo $form->field($model, 'sandi_kantor') ?>

    <?php // echo $form->field($model, 'jenis') ?>

    <?php // echo $form->field($model, 'jenis_valuta') ?>

    <?php // echo $form->field($model, 'suku_bunga') ?>

    <?php // echo $form->field($model, 'jumlah_bulan_lalu') ?>

    <?php // echo $form->field($model, 'jumlah_debet') ?>

    <?php // echo $form->field($model, 'jumlah_kredit') ?>

    <?php // echo $form->field($model, 'jumlah_lainnya') ?>

    <?php // echo $form->field($model, 'jumlah_bulan_laporan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
