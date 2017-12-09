<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form36".
 *
 * @property integer $form_id
 * @property string $create_at
 * @property string $update_at
 * @property integer $laporan_id
 * @property integer $user_id
 * @property string $status
 * @property string $jenis
 * @property string $jenis_valuta
 * @property string $kreditur_golongan
 * @property integer $kreditur_hubungan_bank
 * @property integer $kreditur_status
 * @property string $suku_bunga
 * @property string $jumlah_bulan_lalu
 * @property string $jumlah_debet
 * @property string $jumlah_kredit
 * @property string $jumlah_lainnya
 * @property string $jumlah_bulan_laporan
 *
 * @property Laporan $laporan
 * @property User $user
 */
class Form36 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form36';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_at', 'update_at'], 'safe'],
            [['laporan_id', 'user_id', 'status', 'jenis', 'jenis_valuta', 'kreditur_golongan', 'kreditur_hubungan_bank', 'kreditur_status', 'suku_bunga', 'jumlah_bulan_lalu', 'jumlah_debet', 'jumlah_kredit', 'jumlah_lainnya', 'jumlah_bulan_laporan'], 'required'],
            [['laporan_id', 'user_id', 'kreditur_hubungan_bank', 'kreditur_status'], 'integer'],
            [['suku_bunga', 'jumlah_bulan_lalu', 'jumlah_debet', 'jumlah_kredit', 'jumlah_lainnya', 'jumlah_bulan_laporan'], 'number'],
            [['status'], 'string', 'max' => 20],
            [['jenis'], 'string', 'max' => 2],
            [['jenis_valuta'], 'string', 'max' => 3],
            [['kreditur_golongan'], 'string', 'max' => 4],
            [['laporan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Laporan::className(), 'targetAttribute' => ['laporan_id' => 'laporan_id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'form_id' => 'Form ID',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'laporan_id' => 'Laporan ID',
            'user_id' => 'User ID',
            'status' => 'Status',
            'jenis' => 'Jenis',
            'jenis_valuta' => 'Jenis Valuta',
            'kreditur_golongan' => 'Kreditur Golongan',
            'kreditur_hubungan_bank' => 'Kreditur Hubungan Bank',
            'kreditur_status' => 'Kreditur Status',
            'suku_bunga' => 'Suku Bunga',
            'jumlah_bulan_lalu' => 'Jumlah Bulan Lalu',
            'jumlah_debet' => 'Jumlah Debet',
            'jumlah_kredit' => 'Jumlah Kredit',
            'jumlah_lainnya' => 'Jumlah Lainnya',
            'jumlah_bulan_laporan' => 'Jumlah Bulan Laporan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLaporan()
    {
        return $this->hasOne(Laporan::className(), ['laporan_id' => 'laporan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['user_id' => 'user_id']);
    }
}
