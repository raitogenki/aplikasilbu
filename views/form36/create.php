<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Form36 */

$this->title = 'Create Form36';
// $this->params['breadcrumbs'][] = ['label' => 'Form36s', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="form36-create">

    <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
