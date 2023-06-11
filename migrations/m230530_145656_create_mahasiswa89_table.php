<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswa89}}`.
 */
class m230530_145656_create_mahasiswa89_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswa89}}', [
            'id' => $this->primaryKey(),
            'nim' => $this->string(15)->notNull(),
            'nama_mahasiswa' => $this->string(100)->notNull(),
            'kelas' => $this->char(1)->notNull(),
            'status' => $this->string(11)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswa89}}');
    }
}
