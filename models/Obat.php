<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id_obat
 * @property string $nama_obat
 * @property string $jenis_obat
 * @property string $deskripsi_obat
 * @property int $harga_obat
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_obat', 'jenis_obat', 'deskripsi_obat', 'harga_obat'], 'required'],
            [['harga_obat'], 'integer'],
            [['nama_obat', 'jenis_obat'], 'string', 'max' => 100],
            [['deskripsi_obat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_obat' => 'Id Obat',
            'nama_obat' => 'Nama Obat',
            'jenis_obat' => 'Jenis Obat',
            'deskripsi_obat' => 'Deskripsi Obat',
            'harga_obat' => 'Harga Obat',
        ];
    }
}
