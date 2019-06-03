<?php
namespace app\models;
use app\models\query\UserQuery;
use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Exception;
use yii\helpers\ArrayHelper;
use yii\web\IdentityInterface;
use zxbodya\yii2\imageAttachment\ImageAttachmentBehavior;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 * @property string $authKey
 * @property mixed $teacher
 * @property string $access_token [varchar(255)]
 */
class User extends ActiveRecord implements IdentityInterface
{
    const ROLE_USER = 'user';
    const ROLE_ADMINISTRATOR = 'admin';


    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;

    public const STATUS = [
        1 => 'Активный',
        0 => 'Удаленный'
    ];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            'coverBehavior' => [
                'class' => ImageAttachmentBehavior::class,
                // type name for model
                'type' => 'user',
                // image dimmentions for preview in widget
                'previewHeight' => 200,
                'previewWidth' => 300,
                // extension for images saving
                'extension' => 'jpg',
                // path to location where to save images
                'directory' => Yii::getAlias('@webroot') . '/images/post/cover',
                'url' => Yii::getAlias('@web') . '/images/post/cover',
                // additional image versions
                'versions' => [
                    'small' => function ($img) {
                        /** @var ImageInterface $img */
                        return $img
                            ->copy()
                            ->resize($img->getSize()->widen(200));
                    },
                    'medium' => function ($img) {
                        /** @var ImageInterface $img */
                        $dstSize = $img->getSize();
                        $maxWidth = 800;
                        if ($dstSize->getWidth() > $maxWidth) {
                            $dstSize = $dstSize->widen($maxWidth);
                        }
                        return [
                            $img->copy()->resize($dstSize),
                            ['jpeg_quality' => 80], // options used when saving image (Imagine::save)
                        ];
                    },
                ]
            ]
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
            [['username'], 'string'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => 'Имя пользователя',
            'status' => 'Статус',
        ];
    }

    /**
     * @return bool|void
     * @throws \Throwable
     * @throws \yii\db\StaleObjectException
     */
    public function beforeDelete()
    {
        if (parent::beforeDelete()) {
            foreach (AuthAssignment::find()->where(['user_id' => $this->id])->all() as $user) {
                $user->delete();
            }

            return true;
        }

        return false;
    }

    public function getAuth()
    {
        return $this->hasOne(AuthAssignment::class, ['user_id' => 'id']);
    }

    public function getClasses()
    {
        return $this->hasOne(ParentToClass::class, ['user_id' => 'id']);
    }

    public function getLetter()
    {
        if (!empty($this->classes)) {

            return $this->classes->letter;
        }

        return null;
    }

    /**
     * @param string $role
     * @param int $id
     * @return bool
     */
    public function getAuthAssignment(string $role = null ,int $id)
    {
        $model = new AuthAssignment([
            'user_id' => $id,
            'item_name' => $role,
        ]);

        $model->save(false);

        return true;
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
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
        return static::findOne(['username' => $username, 'status' => self::STATUS_ACTIVE]);
    }
    /**
     * Finds user by e-mail
     *
     * @param string $email
     * @return static|null
     */
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email, 'status' => self::STATUS_ACTIVE]);
    }
    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }
        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }
    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }
        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }
    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public function getUsername()
    {
        return $this->username;
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
        return $this->getAuthKey() === $authKey;
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

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     * @throws \yii\base\Exception
     */
    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }
    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }
    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }
    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    public static function getTeacher()
    {
        $teacher = 'teacher';

        return static::find()
            ->select('user.*')
            ->leftJoin('auth_assignment', 'user.id = auth_assignment.user_id')
            ->where(['auth_assignment.item_name' => $teacher])
            ->all();
    }

    public static function namesTeacher()
    {
        return ArrayHelper::map(static::getTeacher(), 'username', 'username');
    }

    public function getRole()
    {
        if (!empty($this->auth)) {
            return $this->auth->item_name;
        }

        return null;
    }

    public function getAvatar()
    {
        return $this->getBehavior('coverBehavior')->getUrl('small');
    }

    /**
     * {@inheritdoc}
     * @return UserQuery
     */
    public static function find()
    {
        return new UserQuery(get_called_class());
    }
}