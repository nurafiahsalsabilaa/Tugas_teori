<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "mahasiswaa089".
 *
 * @property int $id089
 * @property string $nim089
 * @property string $nama_mahasiswa089
 * @property string $kelas089
 * @property string $status089
 */
class Mahasiswaa089 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mahasiswaa089';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nim089', 'nama_mahasiswa089', 'kelas089', 'status089'], 'required'],
            [['nim089'], 'string', 'max' => 15],
            [['nama_mahasiswa089'], 'string', 'max' => 100],
            [['kelas089'], 'string', 'max' => 1],
            [['status089'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id089' => 'Id089',
            'nim089' => 'Nim089',
            'nama_mahasiswa089' => 'Nama Mahasiswa089',
            'kelas089' => 'Kelas089',
            'status089' => 'Status089',
        ];
    }
}
