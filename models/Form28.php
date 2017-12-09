<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form28".
 *
 * @property integer $form_id
 * @property string $create_at
 * @property string $update_at
 * @property integer $laporan_id
 * @property integer $user_id
 * @property string $status
 * @property string $nomer_referensi_transaksi
 * @property string $jenis
 * @property integer $kontrak
 * @property string $jenis_valuta
 * @property integer $variabel_mendasar
 * @property string $pihak_lawan_golongan
 * @property integer $pihak_lawan_hubungan_bank
 * @property integer $pihak_lawan_status
 * @property string $negara_pihak_lawan
 * @property string $jumlah_kewajiban_bulan_lalu
 * @property string $jumlah_kewajiban_bulan_
 *
 * @property Laporan $laporan
 * @property User $user
 */
class Form28 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form28';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_at', 'update_at'], 'safe'],
            [['laporan_id', 'user_id', 'status', 'nomer_referensi_transaksi', 'jenis', 'kontrak', 'jenis_valuta', 'variabel_mendasar', 'pihak_lawan_golongan', 'pihak_lawan_hubungan_bank', 'pihak_lawan_status', 'negara_pihak_lawan', 'jumlah_kewajiban_bulan_lalu', 'jumlah_kewajiban_bulan_'], 'required'],
            [['laporan_id', 'user_id', 'kontrak', 'variabel_mendasar', 'pihak_lawan_hubungan_bank', 'pihak_lawan_status'], 'integer'],
            [['jumlah_kewajiban_bulan_lalu', 'jumlah_kewajiban_bulan_'], 'number'],
            [['status', 'nomer_referensi_transaksi'], 'string', 'max' => 20],
            [['jenis'], 'string', 'max' => 2],
            [['jenis_valuta', 'negara_pihak_lawan'], 'string', 'max' => 3],
            [['pihak_lawan_golongan'], 'string', 'max' => 4],
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
            'nomer_referensi_transaksi' => 'Nomer Referensi Transaksi',
            'jenis' => 'Jenis',
            'kontrak' => 'Kontrak',
            'jenis_valuta' => 'Jenis Valuta',
            'variabel_mendasar' => 'Variabel Mendasar',
            'pihak_lawan_golongan' => 'Pihak Lawan Golongan',
            'pihak_lawan_hubungan_bank' => 'Pihak Lawan Hubungan Bank',
            'pihak_lawan_status' => 'Pihak Lawan Status',
            'negara_pihak_lawan' => 'Negara Pihak Lawan',
            'jumlah_kewajiban_bulan_lalu' => 'Jumlah Kewajiban Bulan Lalu',
            'jumlah_kewajiban_bulan_' => 'Jumlah Kewajiban Bulan',
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
