<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Form20 */

$this->title = 'Create Form20';
$this->params['breadcrumbs'][] = ['label' => 'Form20s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form20-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
