<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dosen_kelas".
 *
 * @property int $id
 * @property string $nip
 * @property string $dosen_ke
 * @property string $id_kelas
 */
class DosenKelas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dosen_kelas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nip', 'dosen_ke', 'id_kelas'], 'required'],
            [['nip'], 'string', 'max' => 20],
            [['dosen_ke', 'id_kelas'], 'string', 'max' => 255],
            [['nip'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nip' => 'Nip',
            'dosen_ke' => 'Dosen Ke',
            'id_kelas' => 'Id Kelas',
        ];
    }
}
