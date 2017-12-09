<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Form36 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form36-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'laporan_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_valuta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kreditur_golongan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kreditur_hubungan_bank')->textInput() ?>

    <?= $form->field($model, 'kreditur_status')->textInput() ?>

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
