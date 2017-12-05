<?php
use yii\helpers\Html;
use app\models\Form04;

//Menampilkan daftar form yang bisa dibuat

$this->title = 'Form List';
$this->params['breadcrumbs'][] = ['label' => 'Laporan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laporan-form">

    <h1><?= Html::encode($this->title) ?></h1>
    
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
            $form04_id = Form04::find()->where(['laporan_id' => $_GET['id']])->one()['form_id'];

            if (empty(Form04::find()->where(['laporan_id' => $_GET['id']])->one())){
            //if(empty(Form04::find($_GET['id']))){
                echo 'Belum dibuat';
            } else {
                echo Form04::find($_GET['id'])->one()['status'];
            }
        ?>
        </td>
        <td>
        <?php 
            if (empty(Form04::find()->where(['laporan_id' => $_GET['id']])->one())){
                if (Yii::$app->user->identity->role == 'Operator'){
                    echo Html::a('<span class="glyphicon glyphicon-plus"></span>', ['form04/create', 'id'=> $_GET['id']], 
                        ['title' => Yii::t('yii', 'Create')]);
                }
            } else{
                echo Html::a('<span class="glyphicon glyphicon-eye-open"></span>', ['form04/view', 'id'=> $form04_id], 
                    ['title' => Yii::t('yii', 'View')]).' ';
            
                echo Html::a('<span class="glyphicon glyphicon-pencil"></span>', ['form04/update', 'id'=> $form04_id], 
                    ['title' => Yii::t('yii', 'Update')]).' ';

                if (Yii::$app->user->identity->role == 'Supervisor'){
                    echo Html::a('<span class="glyphicon glyphicon-trash"></span>', ['form04/delete', 'id'=> $form04_id], [
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
        <td>Form-08</td>
        <td>Daftar Rincian Surat Berharga Repo</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>3</td>
        <td>Form-12</td>
        <td>Daftar Rincian Penyertaan</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>4</td>
        <td>Form-16</td>
        <td>Daftar Rincian Properti Terbengkalai</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>5</td>
        <td>Form-20</td>
        <td>Daftar Rincian Kewajiban Antar Kantor Yang Melakukan kegiatan operasional di luar Indonesia</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>6</td>
        <td>Form-24</td>
        <td>Daftar Rincian Tabungan</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>7</td>
        <td>Form-28</td>
        <td>Daftar Rincian Kewajiban Spot dan Derivatif</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>8</td>
        <td>Form-32</td>
        <td>Daftar Rincian Pinjaman yang diterima</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>9</td>
        <td>Form-36</td>
        <td>Daftar Rincian Rupa-rupa Kewajiban</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>10</td>
        <td>Form-44</td>
        <td>Daftar Rincian Garansi Yang Diberikan</td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td>11</td>
        <td>Form-48</td>
        <td>Daftar Rincian Pelimpahan Kredit pada Bulan Laporan</td>
        <td></td>
        <td></td>
    </tr>
    </table>
</div>
