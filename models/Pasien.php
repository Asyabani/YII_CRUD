<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_pasien
 * @property string $nama_pasien
 * @property string $alamat_pasien
 * @property string $tanggal_lahir_pasien
 * @property string $created_at
 * @property string $updated_at
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'alamat_pasien', 'tanggal_lahir_pasien'], 'required'],
            [['tanggal_lahir_pasien', 'created_at', 'updated_at'], 'safe'],
            [['nama_pasien'], 'string', 'max' => 50],
            [['alamat_pasien'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'alamat_pasien' => 'Alamat Pasien',
            'tanggal_lahir_pasien' => 'Tanggal Lahir Pasien',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
