<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%todo}}`.
 */
class m240907_113947_create_todo_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%todo}}', [
            'id' => $this->primaryKey(),
            'task' => $this->string(255)->notNull(),
            'status' => $this->boolean()->defaultValue(0),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%todo}}');
    }
}
