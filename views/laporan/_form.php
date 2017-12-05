<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Laporan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="laporan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bulan')->textInput() ?>

    <?= $form->field($model, 'tahun')->textInput() ?>

    <?php 
        if(Yii::$app->user->identity->role == 'Operator'){
            echo $form->field($model, 'user_id')->hiddenInput(['value' => Yii::$app->user->identity->user_id])->label(false);

            echo $form->field($model, 'status')->hiddenInput(['value' => 'Dalam peninjauan'])->label(false);
        }else{
            echo $form->field($model, 'status')->dropDownList(['Dalam peninjauan' => 'Dalam peninjauan', 'Valid' => 'Valid']);
        }    
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
