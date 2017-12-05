<?php

use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Aplikasi LBU';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Selamat Datang!</h1>

        <p class="lead">Anda masuk pada Aplikasi LBU sebagai <?= Yii::$app->user->identity->role ?>.</p>

        <p><?= Html::a('Kelola Laporan', ['/laporan'], ['class' => 'btn btn-success']) ?></p>
    </div>

    <div class="body-content">

    </div>
</div>
