<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id_pasien
 * @property int $id_transaksi
 * @property string $status_transaksi
 */
class Trx extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi', 'status_transaksi'], 'required'],
            [['id_transaksi'], 'integer'],
            [['status_transaksi'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'id_transaksi' => 'Id Transaksi',
            'status_transaksi' => 'Status Transaksi',
        ];
    }
}
