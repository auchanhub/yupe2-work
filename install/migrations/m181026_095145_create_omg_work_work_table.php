<?php

use yii\db\Migration;

/**
 * Handles the creation of table `omg_work_work`.
 */
class m181026_095145_create_omg_work_work_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%omg_work_work}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'slug' => $this->string()->notNull()->unique(),
            'description' => $this->text(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->null(),
            'author_id' => $this->integer()->defaultValue(null),
        ]);

        //ix
        $this->createIndex('ux_omg_work_work_slug', '{{%omg_work_work}}', 'slug', true);

        //fk
        $this->addForeignKey('fk_omg_work_work_author_id', '{{%omg_work_work}}', 'author_id', '{{%amylabs_user_user}}', 'id', 'CASCADE', 'CASCADE');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%omg_work_work}}');
    }
}
