<?php
use yii\helpers\Html;
use app\models\Form04;
use app\models\Form12;
use app\models\Form16;
use app\models\Form20;
use app\models\Form28;
use app\models\Form36;

//Menampilkan daftar form yang bisa dibuat

$this->title = 'Daftar Form';
// $this->params['breadcrumbs'][] = ['label' => 'Laporan', 'url' => ['index']];
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-form">

    <h2 style="text-align: center"><?= Html::encode($this->title) ?></h2>
    
    <table class="table table-bordered">
    <tr>
        <th>#</th>
        <th><a>Form</a></th>
        <th><a>Nama</a></th>
        <th><a>Status</a></th>
        <th></th>
    </tr>
    <tr>
        <td>1</td>
        <td>Form-04</td>
        <td>Daftar Rincian Penempatan Pada Bank Indonesia</td>
        <td>
        <?php 
            $form = 'form04';
            $form_isEmpty = empty(Form04::find()->where(['laporan_id' => $_GET['id']])->one());
            $form_id = Form04::find()->where(['laporan_id' => $_GET['id']])->one()['form_id'];
            $form_status = Form04::find()->where(['laporan_id' => $_GET['id']])->one()['status'];

            if ($form_isEmpty){
                echo 'Belum dibuat';
            } else {
                echo $form_status;
            }
        ?>
        </td>
        <td>
        <?php 
            if ($form_isEmpty){
                if (Yii::$app->user->identity->role == 'Operator'){
                    echo Html::a('<span class="glyphicon glyphicon-plus"></span>', [$form.'/create', 'id'=> $_GET['id']], [
                        'title' => Yii::t('yii', 'Create')]);
                }
            } else{
                echo Html::a('<span class="glyphicon glyphicon-eye-open"></span>', [$form.'/view', 'id'=> $form_id], [
                    'title' => Yii::t('yii', 'View')]).' ';
            
                if (Yii::$app->user->identity->role == 'Operator'){

                    echo Html::a('<span class="glyphicon glyphicon-pencil"></span>', [$form.'/update', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Update')]).' ';
                    
                    if ($form_status == 'Valid') {
                        echo Html::a('<span class="glyphicon glyphicon-print"></span>', [$form.'/print', 'id'=> $form_id], [
                            'title' => Yii::t('yii', 'Print'), 'target'=>'_blank']);
                    }
                } else {
                    echo Html::a('<span class="glyphicon glyphicon-check"></span>', [$form.'/approve', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Approve'), 
                        'data' => [
                            'confirm' => 'Are you sure you want to approve this item?',
                            'method' => 'post',
                        ],
                    ]).' ';

                    echo Html::a('<span class="glyphicon glyphicon-trash"></span>', [$form.'/delete', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Delete'), 
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]);    
                }
            }
        ?>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>Form-12</td>
        <td>Daftar Rincian Penyertaan</td>
        <td>
        <?php 
            $form = 'form12';
            $form_isEmpty = empty(Form12::find()->where(['laporan_id' => $_GET['id']])->one());
            $form_id = Form12::find()->where(['laporan_id' => $_GET['id']])->one()['form_id'];
            $form_status = Form12::find()->where(['laporan_id' => $_GET['id']])->one()['status'];

            if ($form_isEmpty){
                echo 'Belum dibuat';
            } else {
                echo $form_status;
            }
        ?>
        </td>
        <td>
        <?php 
            if ($form_isEmpty){
                if (Yii::$app->user->identity->role == 'Operator'){
                    echo Html::a('<span class="glyphicon glyphicon-plus"></span>', [$form.'/create', 'id'=> $_GET['id']], [
                        'title' => Yii::t('yii', 'Create')]);
                }
            } else{
                echo Html::a('<span class="glyphicon glyphicon-eye-open"></span>', [$form.'/view', 'id'=> $form_id], [
                    'title' => Yii::t('yii', 'View')]).' ';
            
                if (Yii::$app->user->identity->role == 'Operator'){

                    echo Html::a('<span class="glyphicon glyphicon-pencil"></span>', [$form.'/update', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Update')]).' ';
                    
                    if ($form_status == 'Valid') {
                        echo Html::a('<span class="glyphicon glyphicon-print"></span>', [$form.'/print', 'id'=> $form_id], [
                            'title' => Yii::t('yii', 'Print'), 'target'=>'_blank']);
                    }
                } else {
                    echo Html::a('<span class="glyphicon glyphicon-check"></span>', [$form.'/approve', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Approve'), 
                        'data' => [
                            'confirm' => 'Are you sure you want to approve this item?',
                            'method' => 'post',
                        ],
                    ]).' ';

                    echo Html::a('<span class="glyphicon glyphicon-trash"></span>', [$form.'/delete', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Delete'), 
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]);    
                }
            }
        ?>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>Form-16</td>
        <td>Daftar Rincian Properti Terbengkalai</td>
        <td>
        <?php 
            $form = 'form16';
            $form_isEmpty = empty(Form16::find()->where(['laporan_id' => $_GET['id']])->one());
            $form_id = Form16::find()->where(['laporan_id' => $_GET['id']])->one()['form_id'];
            $form_status = Form16::find()->where(['laporan_id' => $_GET['id']])->one()['status'];

            if ($form_isEmpty){
                echo 'Belum dibuat';
            } else {
                echo $form_status;
            }
        ?>
        </td>
        <td>
        <?php 
            if ($form_isEmpty){
                if (Yii::$app->user->identity->role == 'Operator'){
                    echo Html::a('<span class="glyphicon glyphicon-plus"></span>', [$form.'/create', 'id'=> $_GET['id']], [
                        'title' => Yii::t('yii', 'Create')]);
                }
            } else{
                echo Html::a('<span class="glyphicon glyphicon-eye-open"></span>', [$form.'/view', 'id'=> $form_id], [
                    'title' => Yii::t('yii', 'View')]).' ';
            
                if (Yii::$app->user->identity->role == 'Operator'){

                    echo Html::a('<span class="glyphicon glyphicon-pencil"></span>', [$form.'/update', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Update')]).' ';
                    
                    if ($form_status == 'Valid') {
                        echo Html::a('<span class="glyphicon glyphicon-print"></span>', [$form.'/print', 'id'=> $form_id], [
                            'title' => Yii::t('yii', 'Print'), 'target'=>'_blank']);
                    }
                } else {
                    echo Html::a('<span class="glyphicon glyphicon-check"></span>', [$form.'/approve', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Approve'), 
                        'data' => [
                            'confirm' => 'Are you sure you want to approve this item?',
                            'method' => 'post',
                        ],
                    ]).' ';

                    echo Html::a('<span class="glyphicon glyphicon-trash"></span>', [$form.'/delete', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Delete'), 
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]);    
                }
            }
        ?>
        </td>
    </tr>
    <tr>
        <td>4</td>
        <td>Form-20</td>
        <td>Daftar Rincian Kewajiban Antar Kantor Yang Melakukan kegiatan operasional di luar Indonesia</td>
        <td>
        <?php 
            $form = 'form20';
            $form_isEmpty = empty(Form20::find()->where(['laporan_id' => $_GET['id']])->one());
            $form_id = Form20::find()->where(['laporan_id' => $_GET['id']])->one()['form_id'];
            $form_status = Form20::find()->where(['laporan_id' => $_GET['id']])->one()['status'];

            if ($form_isEmpty){
                echo 'Belum dibuat';
            } else {
                echo $form_status;
            }
        ?>
        </td>
        <td>
        <?php 
            if ($form_isEmpty){
                if (Yii::$app->user->identity->role == 'Operator'){
                    echo Html::a('<span class="glyphicon glyphicon-plus"></span>', [$form.'/create', 'id'=> $_GET['id']], [
                        'title' => Yii::t('yii', 'Create')]);
                }
            } else{
                echo Html::a('<span class="glyphicon glyphicon-eye-open"></span>', [$form.'/view', 'id'=> $form_id], [
                    'title' => Yii::t('yii', 'View')]).' ';
            
                if (Yii::$app->user->identity->role == 'Operator'){

                    echo Html::a('<span class="glyphicon glyphicon-pencil"></span>', [$form.'/update', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Update')]).' ';
                    
                    if ($form_status == 'Valid') {
                        echo Html::a('<span class="glyphicon glyphicon-print"></span>', [$form.'/print', 'id'=> $form_id], [
                            'title' => Yii::t('yii', 'Print'), 'target'=>'_blank']);
                    }
                } else {
                    echo Html::a('<span class="glyphicon glyphicon-check"></span>', [$form.'/approve', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Approve'), 
                        'data' => [
                            'confirm' => 'Are you sure you want to approve this item?',
                            'method' => 'post',
                        ],
                    ]).' ';

                    echo Html::a('<span class="glyphicon glyphicon-trash"></span>', [$form.'/delete', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Delete'), 
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]);    
                }
            }
        ?>
        </td>
    </tr>
    <tr>
        <td>5</td>
        <td>Form-28</td>
        <td>Daftar Rincian Kewajiban Spot dan Derivatif</td>
        <td>
        <?php 
            $form = 'form28';
            $form_isEmpty = empty(Form28::find()->where(['laporan_id' => $_GET['id']])->one());
            $form_id = Form28::find()->where(['laporan_id' => $_GET['id']])->one()['form_id'];
            $form_status = Form28::find()->where(['laporan_id' => $_GET['id']])->one()['status'];

            if ($form_isEmpty){
                echo 'Belum dibuat';
            } else {
                echo $form_status;
            }
        ?>
        </td>
        <td>
        <?php 
            if ($form_isEmpty){
                if (Yii::$app->user->identity->role == 'Operator'){
                    echo Html::a('<span class="glyphicon glyphicon-plus"></span>', [$form.'/create', 'id'=> $_GET['id']], [
                        'title' => Yii::t('yii', 'Create')]);
                }
            } else{
                echo Html::a('<span class="glyphicon glyphicon-eye-open"></span>', [$form.'/view', 'id'=> $form_id], [
                    'title' => Yii::t('yii', 'View')]).' ';
            
                if (Yii::$app->user->identity->role == 'Operator'){

                    echo Html::a('<span class="glyphicon glyphicon-pencil"></span>', [$form.'/update', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Update')]).' ';
                    
                    if ($form_status == 'Valid') {
                        echo Html::a('<span class="glyphicon glyphicon-print"></span>', [$form.'/print', 'id'=> $form_id], [
                            'title' => Yii::t('yii', 'Print'), 'target'=>'_blank']);
                    }
                } else {
                    echo Html::a('<span class="glyphicon glyphicon-check"></span>', [$form.'/approve', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Approve'), 
                        'data' => [
                            'confirm' => 'Are you sure you want to approve this item?',
                            'method' => 'post',
                        ],
                    ]).' ';

                    echo Html::a('<span class="glyphicon glyphicon-trash"></span>', [$form.'/delete', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Delete'), 
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]);    
                }
            }
        ?>
        </td>
    </tr>
    <tr>
        <td>6</td>
        <td>Form-36</td>
        <td>Daftar Rincian Rupa-rupa Kewajiban</td>
        <td>
        <?php 
            $form = 'form36';
            $form_isEmpty = empty(Form36::find()->where(['laporan_id' => $_GET['id']])->one());
            $form_id = Form36::find()->where(['laporan_id' => $_GET['id']])->one()['form_id'];
            $form_status = Form36::find()->where(['laporan_id' => $_GET['id']])->one()['status'];

            if ($form_isEmpty){
                echo 'Belum dibuat';
            } else {
                echo $form_status;
            }
        ?>
        </td>
        <td>
        <?php 
            if ($form_isEmpty){
                if (Yii::$app->user->identity->role == 'Operator'){
                    echo Html::a('<span class="glyphicon glyphicon-plus"></span>', [$form.'/create', 'id'=> $_GET['id']], [
                        'title' => Yii::t('yii', 'Create')]);
                }
            } else{
                echo Html::a('<span class="glyphicon glyphicon-eye-open"></span>', [$form.'/view', 'id'=> $form_id], [
                    'title' => Yii::t('yii', 'View')]).' ';
            
                if (Yii::$app->user->identity->role == 'Operator'){

                    echo Html::a('<span class="glyphicon glyphicon-pencil"></span>', [$form.'/update', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Update')]).' ';
                    
                    if ($form_status == 'Valid') {
                        echo Html::a('<span class="glyphicon glyphicon-print"></span>', [$form.'/print', 'id'=> $form_id], [
                            'title' => Yii::t('yii', 'Print'), 'target'=>'_blank']);
                    }
                } else {
                    echo Html::a('<span class="glyphicon glyphicon-check"></span>', [$form.'/approve', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Approve'), 
                        'data' => [
                            'confirm' => 'Are you sure you want to approve this item?',
                            'method' => 'post',
                        ],
                    ]).' ';

                    echo Html::a('<span class="glyphicon glyphicon-trash"></span>', [$form.'/delete', 'id'=> $form_id], [
                        'title' => Yii::t('yii', 'Delete'), 
                        'data' => [
                            'confirm' => 'Are you sure you want to delete this item?',
                            'method' => 'post',
                        ],
                    ]);    
                }
            }
        ?>
        </td>
    </tr>
    </table>
</div>
