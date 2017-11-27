<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form04".
 *
 * @property integer $form_id
 * @property string $create_at
 * @property string $update_at
 * @property integer $laporan_id
 * @property integer $user_id
 * @property string $status
 * @property string $jenis
 * @property string $jenis_valuta
 * @property string $jangka_mulai
 * @property string $jangka_jatuh_tempo
 * @property string $suku_bunga
 * @property string $jumlah
 *
 * @property Laporan $laporan
 * @property User $user
 */
class Form04 extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form04';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_at', 'update_at', 'jangka_mulai', 'jangka_jatuh_tempo'], 'safe'],
            [['laporan_id', 'user_id', 'status', 'jenis', 'jenis_valuta', 'jangka_mulai', 'jangka_jatuh_tempo', 'suku_bunga', 'jumlah'], 'required'],
            [['laporan_id', 'user_id'], 'integer'],
            [['suku_bunga', 'jumlah'], 'number'],
            [['status'], 'string', 'max' => 20],
            [['jenis'], 'string', 'max' => 2],
            [['jenis_valuta'], 'string', 'max' => 3],
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
            'jangka_mulai' => 'Jangka Mulai',
            'jangka_jatuh_tempo' => 'Jangka Jatuh Tempo',
            'suku_bunga' => 'Suku Bunga',
            'jumlah' => 'Jumlah',
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
