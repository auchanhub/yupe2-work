<?php

namespace omg\work\common\models;

use Yii;
use amylabs\user\models\User;
use omg\work\common\search\models\WorkQuery;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "{{%omg_work_work}}".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property int $author_id
 *
 * @property User $author
 */
class Work extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%omg_work_work}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'slug', 'author_id'], 'required'],
            [['description'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['author_id'], 'integer'],
            [['name', 'slug'], 'string', 'max' => 255],
            [['slug'], 'unique'],
            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::class, 'targetAttribute' => ['author_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('omg.work', 'ID'),
            'name' => Yii::t('omg.work', 'Name'),
            'slug' => Yii::t('omg.work', 'Slug'),
            'description' => Yii::t('omg.work', 'Description'),
            'created_at' => Yii::t('omg.work', 'Created At'),
            'updated_at' => Yii::t('omg.work', 'Updated At'),
            'author_id' => Yii::t('omg.work', 'Author ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(User::class, ['id' => 'author_id']);
    }

    /**
     * @inheritdoc
     * @return WorkQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new WorkQuery(get_called_class());
    }

    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::class
            ]
        ];
    }
}
