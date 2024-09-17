<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "todo".
 *
 * @property int $id
 * @property string $task
 * @property int|null $status
 * @property string $created_at
 */
class Todo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'todo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['task'], 'required'],
            [['status'], 'integer'],
            [['created_at'], 'safe'],
            [['task'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'task' => 'Task',
            'status' => 'Status',
            // 'created_at' => 'Created At',
            'actions' => 'Actions'
        ];
    }
}
