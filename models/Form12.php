<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form12".
 *
 * @property integer $form_id
 * @property string $create_at
 * @property string $update_at
 * @property integer $laporan_id
 * @property integer $user_id
 * @property string $status
 * @property string $perusahaan_emiten_golongan
 * @property integer $perusahaan_emiten_status
 * @property integer $metode_penyertaan
 * @property string $negara_tujuan
 * @property string $jenis_valuta
 * @property integer $kualitas
 * @property integer $tujuan_penyertaan
 * @property string $waktu_penyertaan
 * @property string $bagian_penyertaan
 * @property string $nominal
 * @property string $jumlah_bulan_lalu
 * @property string $jumlah_debet
 * @property string $jumlah_kredit
 * @property string $jumlah_lainnya
 * @property string $jumlah_bulan_laporan
 * @property string $nilai_agunan_diperhitungkan
 * @property string $cadangan_kerugian_individu
 * @property string $cadangan_kerugian_kolektif
 *
 * @property Laporan $laporan
 * @property User $user
 */
class Form12 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form12';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_at', 'update_at', 'waktu_penyertaan'], 'safe'],
            [['laporan_id', 'user_id', 'status', 'perusahaan_emiten_golongan', 'perusahaan_emiten_status', 'metode_penyertaan', 'negara_tujuan', 'jenis_valuta', 'kualitas', 'tujuan_penyertaan', 'waktu_penyertaan', 'bagian_penyertaan', 'nominal', 'jumlah_bulan_lalu', 'jumlah_debet', 'jumlah_kredit', 'jumlah_lainnya', 'jumlah_bulan_laporan', 'nilai_agunan_diperhitungkan', 'cadangan_kerugian_individu', 'cadangan_kerugian_kolektif'], 'required'],
            [['laporan_id', 'user_id', 'perusahaan_emiten_status', 'metode_penyertaan', 'kualitas', 'tujuan_penyertaan'], 'integer'],
            [['bagian_penyertaan', 'nominal', 'jumlah_bulan_lalu', 'jumlah_debet', 'jumlah_kredit', 'jumlah_lainnya', 'jumlah_bulan_laporan', 'nilai_agunan_diperhitungkan', 'cadangan_kerugian_individu', 'cadangan_kerugian_kolektif'], 'number'],
            [['status'], 'string', 'max' => 20],
            [['perusahaan_emiten_golongan'], 'string', 'max' => 4],
            [['negara_tujuan', 'jenis_valuta'], 'string', 'max' => 3],
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
            'perusahaan_emiten_golongan' => 'Perusahaan Emiten Golongan',
            'perusahaan_emiten_status' => 'Perusahaan Emiten Status',
            'metode_penyertaan' => 'Metode Penyertaan',
            'negara_tujuan' => 'Negara Tujuan',
            'jenis_valuta' => 'Jenis Valuta',
            'kualitas' => 'Kualitas',
            'tujuan_penyertaan' => 'Tujuan Penyertaan',
            'waktu_penyertaan' => 'Waktu Penyertaan',
            'bagian_penyertaan' => 'Bagian Penyertaan',
            'nominal' => 'Nominal',
            'jumlah_bulan_lalu' => 'Jumlah Bulan Lalu',
            'jumlah_debet' => 'Jumlah Debet',
            'jumlah_kredit' => 'Jumlah Kredit',
            'jumlah_lainnya' => 'Jumlah Lainnya',
            'jumlah_bulan_laporan' => 'Jumlah Bulan Laporan',
            'nilai_agunan_diperhitungkan' => 'Nilai Agunan Diperhitungkan',
            'cadangan_kerugian_individu' => 'Cadangan Kerugian Individu',
            'cadangan_kerugian_kolektif' => 'Cadangan Kerugian Kolektif',
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
