<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "daftar_barang".
 *
 * @property integer $id_barang
 * @property string $nama_barang
 * @property string $jenis_barang
 * @property integer $jumlah_barang
 */
class DaftarBarang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'daftar_barang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jumlah_barang'], 'integer'],
            [['nama_barang', 'jenis_barang'], 'string', 'max' => 325]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_barang' => 'Id Barang',
            'nama_barang' => 'Nama Barang',
            'jenis_barang' => 'Jenis Barang',
            'jumlah_barang' => 'Jumlah Barang',
        ];
    }
}
