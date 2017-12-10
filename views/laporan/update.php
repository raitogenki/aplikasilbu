<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Laporan */

$this->title = 'Update Laporan: ' . $model->laporan_id;
// $this->params['breadcrumbs'][] = ['label' => 'Laporan', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->laporan_id, 'url' => ['view', 'id' => $model->laporan_id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="laporan-update">

    <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
