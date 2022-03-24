<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $path
 * @property string $sku
 * @property string $title
 * @property string $count
 * @property string $type
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['path', 'sku', 'title', 'count', 'type'], 'required'],
            [['path'], 'file', 'extensions' => 'png, jpg'],
            [['count'], 'integer'],
            [['sku', 'title', 'type'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'path' => 'Path',
            'sku' => 'Sku',
            'title' => 'Title',
            'count' => 'Count',
            'type' => 'Type',
        ];
    }
}
