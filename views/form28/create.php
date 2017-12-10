<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Form28 */

$this->title = 'Create Form28';
// $this->params['breadcrumbs'][] = ['label' => 'Form28s', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="form28-create">

    <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
