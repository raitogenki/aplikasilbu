<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form20".
 *
 * @property integer $form_id
 * @property string $create_at
 * @property string $update_at
 * @property integer $laporan_id
 * @property integer $user_id
 * @property string $status
 * @property string $sandi_kantor
 * @property string $jenis
 * @property string $jenis_valuta
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
class Form20 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form20';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_at', 'update_at'], 'safe'],
            [['laporan_id', 'user_id', 'status', 'sandi_kantor', 'jenis', 'jenis_valuta', 'suku_bunga', 'jumlah_bulan_lalu', 'jumlah_debet', 'jumlah_kredit', 'jumlah_lainnya', 'jumlah_bulan_laporan'], 'required'],
            [['laporan_id', 'user_id'], 'integer'],
            [['suku_bunga', 'jumlah_bulan_lalu', 'jumlah_debet', 'jumlah_kredit', 'jumlah_lainnya', 'jumlah_bulan_laporan'], 'number'],
            [['status'], 'string', 'max' => 20],
            [['sandi_kantor', 'jenis', 'jenis_valuta'], 'string', 'max' => 3],
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
            'sandi_kantor' => 'Sandi Kantor',
            'jenis' => 'Jenis',
            'jenis_valuta' => 'Jenis Valuta',
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
