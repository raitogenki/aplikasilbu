<?php

namespace app\models;

use Yii;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property integer $user_id
 * @property string $username
 * @property string $password
 * @property string $nama
 * @property string $cabang
 * @property string $role
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
 * @property Laporan[] $laporans
 */
class User extends \yii\db\ActiveRecord implements IdentityInterface
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password', 'nama', 'cabang', 'role'], 'required'],
            [['username', 'nama'], 'string', 'max' => 100],
            [['role'], 'string', 'max' => 20],
            [['password'], 'string', 'max' => 255],
            [['cabang'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'username' => 'Username',
            'password' => 'Password',
            'nama' => 'Nama',
            'cabang' => 'Cabang',
            'role' => 'Role',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm04s()
    {
        return $this->hasMany(Form04::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm08s()
    {
        return $this->hasMany(Form08::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm12s()
    {
        return $this->hasMany(Form12::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm16s()
    {
        return $this->hasMany(Form16::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm20s()
    {
        return $this->hasMany(Form20::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm24s()
    {
        return $this->hasMany(Form24::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm28s()
    {
        return $this->hasMany(Form28::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm32s()
    {
        return $this->hasMany(Form32::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm36s()
    {
        return $this->hasMany(Form36::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm44s()
    {
        return $this->hasMany(Form44::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getForm48s()
    {
        return $this->hasMany(Form48::className(), ['user_id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLaporans()
    {
        return $this->hasMany(Laporan::className(), ['user_id' => 'user_id']);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['user_id' => $id]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        throw new NotSupportedException('"findIdentityByAccessToken" is not implemented.');
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->user_id;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    public function setPassword($password) {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }
}
