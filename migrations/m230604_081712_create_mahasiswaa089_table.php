<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%mahasiswaa089}}`.
 */
class m230604_081712_create_mahasiswaa089_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%mahasiswaa089}}', [
            'id089' => $this->primaryKey(),
            'nim089' => $this->string(15)->notNull(),
            'nama_mahasiswa089' => $this->string(100)->notNull(),
            'kelas089' => $this->char(1)->notNull(),
            'status089' => $this->string(11)->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%mahasiswaa089}}');
    }
}
