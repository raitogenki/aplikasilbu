<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\Datepicker;

/* @var $this yii\web\View */
/* @var $model app\models\Form12 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form12-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->hiddenInput(['value' => Yii::$app->user->identity->user_id])->label(false) ?>

    <?= $form->field($model, 'status')->hiddenInput(['value' => 'Dalam peninjauan'])->label(false) ?>

    <?php 
        $list_perusahaan_emiten_golongan = ['002' => 'BANK RAKYAT INDONESIA', '008' => 'BANK MANDIRI', '009' => 'BANK NEGARA INDONESIA', '200' => 'BANK TABUNGAN NEGARA', '013' => 'BANK PERMATA', '014' => 'BANK CENTRAL ASIA', '011' => 'BANK DANAMON INDONESIA'];
        $list_perusahaan_emiten_status = ['1' => 'Perusahaan Induk', '2' => 'Perusahaan Anak', '9' => 'Lainnya'];
        $list_metode_penyertaan = ['1' => 'Metode Biaya', '2' => 'Metode Ekuitas', '5' => 'Diukur pada Nilai Wajar melalui Ekuitas'];
        $list_negara_tujuan = ['ID' => 'INDONESIA', 'US' => 'UNITED STATES OF AMERICA ', 'SG' => 'SINGAPORE', 'AU' => 'AUSTRALIA', 'HK' => 'HONGKONG', 'GB' => 'UNITED KINGDOM (INGGRIS)', 'JP' => 'JAPAN']; 
        $list_jenis_valuta = ['IDR' => 'Indonesian Rupiah', 'USD' => 'US Dollar', 'SGD' => 'Singapore Dollar', 'AUD' => 'Australian Dollar', 'EUR' => 'Euro', 'HKD' => 'Hong Kong Dollar', 'GBP' => 'British Pound Sterling', 'JPY' => 'Japanese Yen']; 
        $list_kualitas = ['1' => 'Lancar', '2' => 'Dalam Perhatian Khusus', '3' => 'Kurang Lancar', '4' => 'Diragukan', '5' => 'Macet'];
        $list_tujuan_penyertaan = ['1' => 'Dalam rangka investasi: Penyertaan pada perusahaan anak', '2' => 'Dalam rangka investasi: Penyertaan pada perusahaan asosiasi', '3' => 'Dalam rangka restrukturisasi kredit', '9' => 'Lainnya'];
    ?>

    <?= $form->field($model, 'perusahaan_emiten_golongan')->dropDownList($list_perusahaan_emiten_golongan,  ['prompt'=>'Pilih Golongan']); ?>

    <?= $form->field($model, 'perusahaan_emiten_status')->dropDownList($list_perusahaan_emiten_status,  ['prompt'=>'Pilih Status']); ?>

    <?= $form->field($model, 'metode_penyertaan')->dropDownList($list_metode_penyertaan, ['prompt'=>'Pilih Metode']); ?>

    <?= $form->field($model, 'negara_tujuan')->dropDownList($list_negara_tujuan, ['prompt'=>'Pilih Negara']); ?>

    <?= $form->field($model, 'jenis_valuta')->dropDownList($list_jenis_valuta, ['prompt'=>'Pilih Valuta']); ?>

    <?= $form->field($model, 'kualitas')->dropDownList($list_kualitas, ['prompt'=>'Pilih Kualitas']); ?>

    <?= $form->field($model, 'tujuan_penyertaan')->dropDownList($list_tujuan_penyertaan, ['prompt'=>'Pilih Tujuan']); ?>

    <?= $form->field($model, 'waktu_penyertaan')->widget(DatePicker::classname(), [
        'name' => 'check_issue_date',
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]) ?>

    <?= $form->field($model, 'bagian_penyertaan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nominal')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_bulan_lalu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_debet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_kredit')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_lainnya')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah_bulan_laporan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nilai_agunan_diperhitungkan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cadangan_kerugian_individu')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cadangan_kerugian_kolektif')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
