<?php


namespace common\models;


use yii\behaviors\BlameableBehavior;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;

class Testimonials extends \common\models\generated\Testimonials {
    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
                TimestampBehavior::class,
                BlameableBehavior::class,

                [
                        'class'         => SluggableBehavior::class,
                        'slugAttribute' => 'title'
                ]
        ];
    }
}