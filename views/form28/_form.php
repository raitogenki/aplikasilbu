<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Form28 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form28-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->hiddenInput(['value' => Yii::$app->user->identity->user_id])->label(false) ?>

    <?= $form->field($model, 'status')->hiddenInput(['value' => 'Dalam peninjauan'])->label(false) ?>

    <?php 
        $list_jenis = ['01' => 'Forward', '03' => 'Future', '04' => 'Swap', '05' => 'Option: Call', '06' => 'Option: Put', '07' => 'Option: Lainnya', '08' => 'Spot', '20' => 'Lainnya', '21' => 'Penyesuaian atas nilai wajar'];
        $list_kontrak = ['1' => 'Jual', '2' => 'Beli', '0' => 'Kontrak Swap'];
        $list_jenis_valuta = ['IDR' => 'Indonesian Rupiah', 'USD' => 'US Dollar', 'SGD' => 'Singapore Dollar', 'AUD' => 'Australian Dollar', 'EUR' => 'Euro', 'HKD' => 'Hong Kong Dollar', 'GBP' => 'British Pound Sterling', 'JPY' => 'Japanese Yen']; 
        $list_variabel_mendasar = ['1' => 'Nilai tukar (currency)', '2' => 'Suku bunga (interest rate)', '3' => 'Nilai Tukar dan Suku Bunga', '9' => 'Lainnya'];
        $list_pihak_lawan_golongan = ['002' => 'BANK RAKYAT INDONESIA', '008' => 'BANK MANDIRI', '009' => 'BANK NEGARA INDONESIA', '200' => 'BANK TABUNGAN NEGARA', '013' => 'BANK PERMATA', '014' => 'BANK CENTRAL ASIA', '011' => 'BANK DANAMON INDONESIA'];
        $list_pihak_lawan_hubungan = ['1' => 'Terkait dengan bank', '2' => 'Tidak terkait dengan bank'];
        $list_pihak_lawan_status = ['1' => 'Perusahaan Induk', '2' => 'Perusahaan Anak', '9' => 'Lainnya'];
        $list_negara_pihak_lawan = ['ID' => 'INDONESIA', 'US' => 'UNITED STATES OF AMERICA ', 'SG' => 'SINGAPORE', 'AU' => 'AUSTRALIA', 'HK' => 'HONGKONG', 'GB' => 'UNITED KINGDOM (INGGRIS)', 'JP' => 'JAPAN']; 
    ?>

    <?= $form->field($model, 'nomer_referensi_transaksi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis')->dropDownList($list_jenis, ['prompt'=>'Pilih Jenis']); ?>

    <?= $form->field($model, 'kontrak')->dropDownList($list_kontrak, ['prompt'=>'Pilih Kontrak']); ?>

    <?= $form->field($model, 'jenis_valuta')->dropDownList($list_jenis_valuta, ['prompt'=>'Pilih Valuta']); ?>

    <?= $form->field($model, 'variabel_mendasar')->dropDownList($list_variabel_mendasar, ['prompt'=>'Pilih Variabel']); ?>

    <?= $form->field($model, 'pihak_lawan_golongan')->dropDownList($list_pihak_lawan_golongan, ['prompt'=>'Pilih Golongan']); ?>

    <?= $form->field($model, 'pihak_lawan_hubungan_bank')->dropDownList($list_pihak_lawan_hubungan, ['prompt'=>'Pilih Hubungan']); ?>

    <?= $form->field($model, 'pihak_lawan_status')->dropDownList($list_pihak_lawan_status, ['prompt'=>'Pilih Status']); ?>

    <?= $form->field($model, 'negara_pihak_lawan')->dropDownList($list_negara_pihak_lawan, ['prompt'=>'Pilih Negara']); ?>

    <?= $form->field($model, 'jumlah_kewajiban_bulan_lalu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_kewajiban_bulan_')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
