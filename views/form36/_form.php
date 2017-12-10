<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Form36 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form36-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->hiddenInput(['value' => Yii::$app->user->identity->user_id])->label(false) ?>
    
    <?= $form->field($model, 'status')->hiddenInput(['value' => 'Dalam peninjauan'])->label(false) ?>

    <?php 
        $list_jenis = ['10' => 'Kewajiban kepada pemerintah yang belum dipindahbukukan', '12' => 'Bunga simpanan berjangka yang sudah jatuh tempo' , '14' => 'Transfer', '16' => 'Cek perjalanan (Traveller’s Cheques) yang telah dijual', '20' => 'Beban bunga yang masih harus dibayar', '25' => 'Deviden yang belum dibayar', '30' => 'Taksiran pajak penghasilan', '70' => 'Pendapatan yang ditangguhkan', '82' => 'Penyisihan kerugian untuk risiko operasional', '83' => 'Rekening Tunda (Suspense Account)', '86' => 'Kewajiban pajak penghasilan', '87' => 'Kewajiban imbalan kerja', '88' => 'E-Money', '89' => 'Goodwill Negatif', '90' => 'Kewajiban diestimasi', '99' => 'Lainnya'];
        $list_jenis_valuta = ['IDR' => 'Indonesian Rupiah', 'USD' => 'US Dollar', 'SGD' => 'Singapore Dollar', 'AUD' => 'Australian Dollar', 'EUR' => 'Euro', 'HKD' => 'Hong Kong Dollar', 'GBP' => 'British Pound Sterling', 'JPY' => 'Japanese Yen']; 
        $list_kreditur_golongan = ['002' => 'BANK RAKYAT INDONESIA', '008' => 'BANK MANDIRI', '009' => 'BANK NEGARA INDONESIA', '200' => 'BANK TABUNGAN NEGARA', '013' => 'BANK PERMATA', '014' => 'BANK CENTRAL ASIA', '011' => 'BANK DANAMON INDONESIA'];
        $list_kreditur_hubungan = ['1' => 'Terkait dengan bank', '2' => 'Tidak terkait dengan bank'];
        $list_kreditur_status = ['1' => 'Perusahaan Induk', '2' => 'Perusahaan Anak', '9' => 'Lainnya'];
    ?>

    <?= $form->field($model, 'jenis')->dropDownList($list_jenis, ['prompt'=>'Pilih Jenis']); ?>

    <?= $form->field($model, 'jenis_valuta')->dropDownList($list_jenis_valuta, ['prompt'=>'Pilih Valuta']); ?>

    <?= $form->field($model, 'kreditur_golongan')->dropDownList($list_kreditur_golongan, ['prompt'=>'Pilih Golongan']); ?>

    <?= $form->field($model, 'kreditur_hubungan_bank')->dropDownList($list_kreditur_hubungan, ['prompt'=>'Pilih Hubungan']); ?>

    <?= $form->field($model, 'kreditur_status')->dropDownList($list_kreditur_status, ['prompt'=>'Pilih Status']); ?>

    <?= $form->field($model, 'suku_bunga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_bulan_lalu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_debet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_kredit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_lainnya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_bulan_laporan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
