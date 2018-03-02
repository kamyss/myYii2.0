<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "my_users".
 *
 * @property integer $id
 * @property integer $name
 */
class Users extends \yii\db\ActiveRecord
{
    public $username;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'my_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username'], 'required','message'=>'名字不能为空'],
            [['username'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'USERNAME',
        ];
    }
}
