<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\Datepicker;

/* @var $this yii\web\View */
/* @var $model app\models\Form04 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form04-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->hiddenInput(['value' => Yii::$app->user->identity->user_id])->label(false) ?>

    <?= $form->field($model, 'status')->hiddenInput(['value' => 'Dalam peninjauan'])->label(false) ?>

    <?php 
        $list_jenis = ['10' => 'Giro', '22' => 'Term Deposit', '24' => 'Deposit Facility', '90' =>'Lainnya']; 
        $list_jenis_valuta = ['IDR' => 'Indonesian Rupiah', 'USD' => 'US Dollar', 'SGD' => 'Singapore Dollar', 'AUD' => 'Australian Dollar', 'EUR' => 'Euro', 'HKD' => 'Hong Kong Dollar', 'GBP' => 'British Pound Sterling', 'JPY' => 'Japanese Yen']; 
    ?>

    <?= $form->field($model, 'jenis')->dropDownList($list_jenis, ['prompt'=>'Pilih Jenis']); ?>

    <?= $form->field($model, 'jenis_valuta')->dropDownList($list_jenis_valuta, ['prompt'=>'Pilih Jenis']); ?>

    <?= $form->field($model, 'jangka_mulai')->widget(DatePicker::classname(), [
        'name' => 'check_issue_date',
        //'options' => ['placeholder' => 'Masukkan jangka mulai'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]) ?>

    <?= $form->field($model, 'jangka_jatuh_tempo')->widget(DatePicker::classname(), [
        'name' => 'check_issue_date',
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'todayHighlight' => true
        ]
    ]) ?>

    <?= $form->field($model, 'suku_bunga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
