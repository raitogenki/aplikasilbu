<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Form28 */

$this->title = 'Create Form28';
$this->params['breadcrumbs'][] = ['label' => 'Form28s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form28-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
