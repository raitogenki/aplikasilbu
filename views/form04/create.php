<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Form04 */

$this->title = 'Create Form04';
$this->params['breadcrumbs'][] = ['label' => 'Laporan', 'url' => ['/laporan']];
$this->params['breadcrumbs'][] = ['label' => 'Form04', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="form04-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
