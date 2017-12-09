<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form16".
 *
 * @property integer $form_id
 * @property string $create_at
 * @property string $update_at
 * @property integer $laporan_id
 * @property integer $user_id
 * @property string $status
 * @property string $jenis
 * @property string $tanggal_penetapan
 * @property integer $jenis_valuta
 * @property integer $metode_pengukuran
 * @property string $biaya_perolehan
 * @property string $cadangan_kerugian
 * @property string $akumulasi_penyusutan
 * @property string $jumlah
 * @property integer $kualitas
 * @property string $ppanp_dibentuk
 *
 * @property Laporan $laporan
 * @property User $user
 */
class Form16 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form16';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_at', 'update_at', 'tanggal_penetapan'], 'safe'],
            [['laporan_id', 'user_id', 'status', 'jenis', 'tanggal_penetapan', 'jenis_valuta', 'metode_pengukuran', 'biaya_perolehan', 'cadangan_kerugian', 'akumulasi_penyusutan', 'jumlah', 'kualitas', 'ppanp_dibentuk'], 'required'],
            [['laporan_id', 'user_id', 'jenis_valuta', 'metode_pengukuran', 'kualitas'], 'integer'],
            [['biaya_perolehan', 'cadangan_kerugian', 'akumulasi_penyusutan', 'jumlah', 'ppanp_dibentuk'], 'number'],
            [['status'], 'string', 'max' => 20],
            [['jenis'], 'string', 'max' => 3],
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
            'tanggal_penetapan' => 'Tanggal Penetapan',
            'jenis_valuta' => 'Jenis Valuta',
            'metode_pengukuran' => 'Metode Pengukuran',
            'biaya_perolehan' => 'Biaya Perolehan',
            'cadangan_kerugian' => 'Cadangan Kerugian',
            'akumulasi_penyusutan' => 'Akumulasi Penyusutan',
            'jumlah' => 'Jumlah',
            'kualitas' => 'Kualitas',
            'ppanp_dibentuk' => 'Ppanp Dibentuk',
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
