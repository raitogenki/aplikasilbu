<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Form36 */

$this->title = 'Update Form36: ' . $model->form_id;
$this->params['breadcrumbs'][] = ['label' => 'Form36s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->form_id, 'url' => ['view', 'id' => $model->form_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="form36-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
