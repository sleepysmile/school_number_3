<?php

namespace app\models;

use yii\base\Model;

class SignupForm extends Model
{
    public $role;

    public $status;

    public $classes;

    public $letter;

    /** @var string - Имя пользователя */
    public $username;

    /** @var string - Пароль пользователя*/
    public $password;

    /** @var string - E-mail пользователя */
    public $email;

    public function rules()
    {
        return [
            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => User::class, 'message' => 'Такое логин уже занят.'],
            ['username', 'string', 'min' => 2, 'max' => 255],
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['role', 'safe'],
            ['status', 'safe'],
            ['classes', 'string'],
            ['letter', 'string'],
            ['status', 'safe'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => User::class, 'message' => 'Такая почта уже занята.'],
            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Имя пользователя',
            'password' => 'Пароль пользователя',
            'role' => 'Роль на сайте',
            'status' => 'Статус аккаунта',
        ];
    }

    /**
     * Signs user up.
     *
     * @return bool
     * @throws \yii\base\Exception
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->letter = $this->letter;
        $user->classes = $this->classes;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        $user->status = $this->status ?: 0;

        $user->save();

        return  $user->getAuthAssignment($this->role ?: 'user', $user->id);
    }

    /**
     * @param int $id
     * @return bool
     * @throws \yii\base\Exception
     */
    public function refactor(int $id)
    {
        $user = User::find()->where(['id' => $id])->one();
        $user->username = $this->username;
        $user->email = $this->email;
        if ($this->password !== $user->password) {
            $user->setPassword($this->password);
        }
        $user->generateAuthKey();
        $user->status = $this->status;
        $user->letter = $this->letter;
        $user->classes = $this->classes;
        $user->save(false);


        if ($this->role == null) {
            return true;
        }
        return true;
    }

}