<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "daftar_buku".
 *
 * @property int $id
 * @property int $kode_buku
 * @property string $nama_buku
 * @property int $jumlah_stok
 * @property int $jumlah_peminjaman
 */
class DaftarBuku extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'daftar_buku';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_buku', 'nama_buku', 'jumlah_stok', 'jumlah_peminjaman'], 'required'],
            [['kode_buku', 'jumlah_stok', 'jumlah_peminjaman'], 'integer'],
            [['nama_buku'], 'string', 'max' => 255],
            [['kode_buku'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode_buku' => 'Kode Buku',
            'nama_buku' => 'Nama Buku',
            'jumlah_stok' => 'Jumlah Stok',
            'jumlah_peminjaman' => 'Jumlah Peminjaman',
        ];
    }
}
