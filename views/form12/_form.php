<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Form12 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form12-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'laporan_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perusahaan_emiten_golongan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perusahaan_emiten_status')->textInput() ?>

    <?= $form->field($model, 'metode_penyertaan')->textInput() ?>

    <?= $form->field($model, 'negara_tujuan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_valuta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kualitas')->textInput() ?>

    <?= $form->field($model, 'tujuan_penyertaan')->textInput() ?>

    <?= $form->field($model, 'waktu_penyertaan')->textInput() ?>

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
