<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Form16 */

$this->title = 'Create Form16';
// $this->params['breadcrumbs'][] = ['label' => 'Form16s', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="form16-create">

    <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
