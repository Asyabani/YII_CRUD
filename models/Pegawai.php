<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $nama_pegawai
 * @property string $email_pegawai
 * @property string $jabatan_pegawai
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pegawai', 'email_pegawai', 'jabatan_pegawai'], 'required'],
            [['nama_pegawai', 'email_pegawai'], 'string', 'max' => 100],
            [['jabatan_pegawai'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nama_pegawai' => 'Nama Pegawai',
            'email_pegawai' => 'Email Pegawai',
            'jabatan_pegawai' => 'Jabatan Pegawai',
        ];
    }
}
