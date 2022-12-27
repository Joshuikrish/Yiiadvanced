<?php

namespace common\models\generated;

use Yii;

/**
 * This is the model class for table "testimonials".
 *
 * @property int $id
 * @property string $author
 * @property string|null $image
 * @property string|null $author_info
 * @property string $content
 */
class Testimonials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'testimonials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author', 'content'], 'required'],
            [['author_info', 'content'], 'string'],
            [['author', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author' => 'Author',
            'image' => 'Image',
            'author_info' => 'Author Info',
            'content' => 'Content',
        ];
    }
}
