<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Form16Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form16-search">

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

    <?php // echo $form->field($model, 'jenis') ?>

    <?php // echo $form->field($model, 'tanggal_penetapan') ?>

    <?php // echo $form->field($model, 'jenis_valuta') ?>

    <?php // echo $form->field($model, 'metode_pengukuran') ?>

    <?php // echo $form->field($model, 'biaya_perolehan') ?>

    <?php // echo $form->field($model, 'cadangan_kerugian') ?>

    <?php // echo $form->field($model, 'akumulasi_penyusutan') ?>

    <?php // echo $form->field($model, 'jumlah') ?>

    <?php // echo $form->field($model, 'kualitas') ?>

    <?php // echo $form->field($model, 'ppanp_dibentuk') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
