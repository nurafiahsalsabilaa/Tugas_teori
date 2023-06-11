<?php

use yii\db\Migration;

/**
 * Class m230526_001652_daftar_buku_table
 */
class m230526_001652_daftar_buku_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%daftar_buku}}', [
            'id' => $this->primaryKey(),
            'kode_buku' => $this->integer()->notNull()->unique(),
            'nama_buku' => $this->string()->notNull(),
            'jumlah_stok' => $this->integer()->notNull(),
            'jumlah_peminjaman' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230526_001652_daftar_buku_table cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230526_001652_daftar_buku_table cannot be reverted.\n";

        return false;
    }
    */
}
