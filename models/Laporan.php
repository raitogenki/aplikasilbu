<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "laporan".
 *
 * @property integer $laporan_id
 * @property string $bulan
 * @property string $tahun
 * @property string $create_at
 * @property string $update_at
 * @property integer $user_id
 * @property string $status
 *
 * @property Form04[] $form04s
 * @property Form08[] $form08s
 * @property Form12[] $form12s
 * @property Form16[] $form16s
 * @property Form20[] $form20s
 * @property Form24[] $form24s
 * @property Form28[] $form28s
 * @property Form32[] $form32s
 * @property Form36[] $form36s
 * @property Form44[] $form44s
 * @property Form48[] $form48s
 * @property User $user
 */
class Laporan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'laporan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'bulan', 'tahun'], 'required'],
            [['bulan', 'tahun', 'create_at', 'update_at'], 'safe'],
            [['user_id', 'tahun'], 'integer'],
            [['status', 'bulan'], 'string', 'max' => 20],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'user_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'laporan_id' => 'Laporan ID',
            'bulan' => 'Bulan',
            'tahun' => 'Tahun',
            'create_at' => 'Create At',
            'update_at' => 'Update At',
            'user_id' => 'User ID',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm04s()
    {
        return $this->hasMany(Form04::className(), ['laporan_id' => 'laporan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm08s()
    {
        return $this->hasMany(Form08::className(), ['laporan_id' => 'laporan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm12s()
    {
        return $this->hasMany(Form12::className(), ['laporan_id' => 'laporan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm16s()
    {
        return $this->hasMany(Form16::className(), ['laporan_id' => 'laporan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm20s()
    {
        return $this->hasMany(Form20::className(), ['laporan_id' => 'laporan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm24s()
    {
        return $this->hasMany(Form24::className(), ['laporan_id' => 'laporan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm28s()
    {
        return $this->hasMany(Form28::className(), ['laporan_id' => 'laporan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm32s()
    {
        return $this->hasMany(Form32::className(), ['laporan_id' => 'laporan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm36s()
    {
        return $this->hasMany(Form36::className(), ['laporan_id' => 'laporan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm44s()
    {
        return $this->hasMany(Form44::className(), ['laporan_id' => 'laporan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm48s()
    {
        return $this->hasMany(Form48::className(), ['laporan_id' => 'laporan_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['user_id' => 'user_id']);
    }
}
