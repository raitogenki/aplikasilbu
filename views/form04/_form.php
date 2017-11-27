<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Form04 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form04-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'create_at')->textInput() ?>

    <?= $form->field($model, 'update_at')->textInput() ?>

    <?= $form->field($model, 'laporan_id')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_valuta')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jangka_mulai')->textInput() ?>

    <?= $form->field($model, 'jangka_jatuh_tempo')->textInput() ?>

    <?= $form->field($model, 'suku_bunga')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jumlah')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
