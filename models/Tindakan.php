<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tindakan".
 *
 * @property int $id_tindakan
 * @property string $tindakan
 * @property string $deskripsi_tindakan
 * @property int $biaya_tindakan
 */
class Tindakan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tindakan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tindakan', 'deskripsi_tindakan', 'biaya_tindakan'], 'required'],
            [['biaya_tindakan'], 'integer'],
            [['tindakan'], 'string', 'max' => 100],
            [['deskripsi_tindakan'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tindakan' => 'Id Tindakan',
            'tindakan' => 'Tindakan',
            'deskripsi_tindakan' => 'Deskripsi Tindakan',
            'biaya_tindakan' => 'Biaya Tindakan',
        ];
    }
}
