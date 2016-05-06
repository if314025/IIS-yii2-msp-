<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "daftar_supplier".
 *
 * @property integer $id_supplier
 * @property string $Nama_supplier
 * @property string $Alamat_Supplier
 */
class DaftarSupplier extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'daftar_supplier';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nama_supplier', 'Alamat_Supplier'], 'string', 'max' => 300]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_supplier' => 'Id Supplier',
            'Nama_supplier' => 'Nama Supplier',
            'Alamat_Supplier' => 'Alamat  Supplier',
        ];
    }
}
