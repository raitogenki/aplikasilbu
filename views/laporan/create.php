<?php

use yii\helpers\Html;
use yii\bootstrap\Alert;

/* @var $this yii\web\View */
/* @var $model app\models\Laporan */

$this->title = 'Create Laporan';
// $this->params['breadcrumbs'][] = ['label' => 'Laporan', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-create">

    <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>

    <div>
        <?php
            if($alert == true) {
                Alert::begin([
                    'options' => [
                        'class' => 'alert-warning',
                    ],
                ]);
                
                echo 'Gagal membuat laporan! Terdapat laporan dengan periode yang sama.';
                
                Alert::end();
            }
        ?>
    </div>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
