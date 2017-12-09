<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Form28 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form28-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'laporan_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nomer_referensi_transaksi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kontrak')->textInput() ?>

    <?= $form->field($model, 'jenis_valuta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'variabel_mendasar')->textInput() ?>

    <?= $form->field($model, 'pihak_lawan_golongan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pihak_lawan_hubungan_bank')->textInput() ?>

    <?= $form->field($model, 'pihak_lawan_status')->textInput() ?>

    <?= $form->field($model, 'negara_pihak_lawan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_kewajiban_bulan_lalu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_kewajiban_bulan_')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
