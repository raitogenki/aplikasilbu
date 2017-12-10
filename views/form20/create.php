<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Form20 */

$this->title = 'Create Form20';
// $this->params['breadcrumbs'][] = ['label' => 'Form20s', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="form20-create">

    <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
