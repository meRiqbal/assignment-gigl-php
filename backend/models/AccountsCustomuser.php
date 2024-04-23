<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accounts_customuser".
 *
 * @property int $id
 * @property string $password
 * @property string $username
 * @property string $email
 */
class AccountsCustomuser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'accounts_customuser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['password', 'username', 'email'], 'required'],
            [['password', 'username'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 254],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'password' => 'Password',
            'username' => 'Username',
            'email' => 'Email',
        ];
    }
}
