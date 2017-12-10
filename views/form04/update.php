<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Form04 */

$this->title = 'Update Form04: ' . $model->form_id;
// $this->params['breadcrumbs'][] = ['label' => 'Form04s', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->form_id, 'url' => ['view', 'id' => $model->form_id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="form04-update">

    <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
