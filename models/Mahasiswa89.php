<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswa89".
 *
 * @property int $id
 * @property string $nim
 * @property string $nama_mahasiswa
 * @property string $kelas
 * @property string $status
 */
class Mahasiswa89 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswa89';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim', 'nama_mahasiswa', 'kelas', 'status'], 'required'],
            [['nim'], 'string', 'max' => 15],
            [['nama_mahasiswa'], 'string', 'max' => 100],
            [['kelas'], 'string', 'max' => 1],
            [['status'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'nama_mahasiswa' => 'Nama Mahasiswa',
            'kelas' => 'Kelas',
            'status' => 'Status',
        ];
    }
}
