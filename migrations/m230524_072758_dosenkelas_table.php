<?php

use yii\db\Migration;

/**
 * Class m230524_072758_dosenkelas_table
 */
class m230524_072758_dosenkelas_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dosen_kelas}}', [
            'id' => $this->primaryKey(),

            'nip' => $this->string(20)->notNull()->unique(),
            'dosen_ke' => $this->string()->notNull(),
            'id_kelas' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%kelas_dose}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230524_072758_dosenkelas_table cannot be reverted.\n";

        return false;
    }
    */
}
