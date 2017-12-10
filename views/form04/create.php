<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Form04 */

$this->title = 'Create Form04';
// $this->params['breadcrumbs'][] = ['label' => 'Form04', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="form04-create">

    <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
