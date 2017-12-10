<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Form12 */

$this->title = 'Create Form12';
// $this->params['breadcrumbs'][] = ['label' => 'Form12s', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="form12-create">

    <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
