<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Form20 */

$this->title = 'Update Form20: ' . $model->form_id;
// $this->params['breadcrumbs'][] = ['label' => 'Form20s', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->form_id, 'url' => ['view', 'id' => $model->form_id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="form20-update">

    <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
