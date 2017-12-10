<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\Datepicker;

/* @var $this yii\web\View */
/* @var $model app\models\Form16 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form16-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->hiddenInput(['value' => Yii::$app->user->identity->user_id])->label(false) ?>

    <?= $form->field($model, 'status')->hiddenInput(['value' => 'Dalam peninjauan'])->label(false) ?>

    <?php
        $list_jenis = ['161' => 'Gedung/Ruang kantor', '162' => 'Gudang', '163' => 'Rumah Toko/Rumah Kantor', '176' => 'Rumah ', '177' => 'Apartemen/Rumah Susun', '187' => 'Tanah ', '205' => 'Lain-lain'];
        $list_jenis_valuta = ['1' => 'Rupiah', '2' => 'Valuta Asing']; 
        $list_metode_pengukuran = ['1' => 'Model Biaya', '2' => 'Model Nilai Wajar']; 
        $list_kualitas = ['1' => 'Lancar', '2' => 'Dalam Perhatian Khusus', '3' => 'Kurang Lancar', '4' => 'Diragukan', '5' => 'Macet'];
    ?>

    <?= $form->field($model, 'jenis')->dropDownList($list_jenis, ['prompt'=>'Pilih Jenis']); ?>

    <?= $form->field($model, 'tanggal_penetapan')->widget(DatePicker::classname(), [
        'name' => 'check_issue_date',
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]) ?>

    <?= $form->field($model, 'jenis_valuta')->dropDownList($list_jenis_valuta, ['prompt'=>'Pilih Valuta']); ?>

    <?= $form->field($model, 'metode_pengukuran')->dropDownList($list_metode_pengukuran, ['prompt'=>'Pilih Metode']); ?>

    <?= $form->field($model, 'biaya_perolehan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cadangan_kerugian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'akumulasi_penyusutan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kualitas')->dropDownList($list_kualitas, ['prompt'=>'Pilih Kualitas']); ?>

    <?= $form->field($model, 'ppanp_dibentuk')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
