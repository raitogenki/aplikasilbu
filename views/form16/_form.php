<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Form16 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form16-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'laporan_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_penetapan')->textInput() ?>

    <?= $form->field($model, 'jenis_valuta')->textInput() ?>

    <?= $form->field($model, 'metode_pengukuran')->textInput() ?>

    <?= $form->field($model, 'biaya_perolehan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cadangan_kerugian')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'akumulasi_penyusutan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kualitas')->textInput() ?>

    <?= $form->field($model, 'ppanp_dibentuk')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
