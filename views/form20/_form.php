<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Form20 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form20-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->hiddenInput(['value' => Yii::$app->user->identity->user_id])->label(false) ?>

    <?= $form->field($model, 'status')->hiddenInput(['value' => 'Dalam peninjauan'])->label(false) ?>

    <?php 
        $list_sandi_kantor = ['002' => 'BANK RAKYAT INDONESIA', '008' => 'BANK MANDIRI', '009' => 'BANK NEGARA INDONESIA', '200' => 'BANK TABUNGAN NEGARA', '013' => 'BANK PERMATA', '014' => 'BANK CENTRAL ASIA', '011' => 'BANK DANAMON INDONESIA'];
        $list_jenis = ['010' => 'Giro', '015' => 'Call money', '025' => 'Deposit on call', '030' => 'Deposito berjangka', '035' => 'Sertifikat deposito', '050' => 'Surat berharga', '060' => 'Kredit yang diberikan', '060' => 'Dana usaha', '088' => 'Pendapatan Bunga yang akan diterima: Giro', '089' => 'Pendapatan Bunga yang akan diterima: Surat berharga', '090' => 'Pendapatan Bunga yang akan diterima: Kredit yang diberikan', '095' => 'Pendapatan Bunga yang akan diterima: Lainnya', '099' => 'Lain-lain'];
        $list_jenis_valuta = ['IDR' => 'Indonesian Rupiah', 'USD' => 'US Dollar', 'SGD' => 'Singapore Dollar', 'AUD' => 'Australian Dollar', 'EUR' => 'Euro', 'HKD' => 'Hong Kong Dollar', 'GBP' => 'British Pound Sterling', 'JPY' => 'Japanese Yen']; 
    ?>

    <?= $form->field($model, 'sandi_kantor')->dropDownList($list_sandi_kantor, ['prompt'=>'Pilih Kantor']); ?>

    <?= $form->field($model, 'jenis')->dropDownList($list_jenis, ['prompt'=>'Pilih Jenis']); ?>

    <?= $form->field($model, 'jenis_valuta')->dropDownList($list_jenis_valuta, ['prompt'=>'Pilih Valuta']); ?>

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
