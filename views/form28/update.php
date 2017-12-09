<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Form28 */

$this->title = 'Update Form28: ' . $model->form_id;
$this->params['breadcrumbs'][] = ['label' => 'Form28s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->form_id, 'url' => ['view', 'id' => $model->form_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="form28-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
