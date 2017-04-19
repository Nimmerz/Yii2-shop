<?php
/**
 * Created by PhpStorm.
 * User: Nimmerz
 * Date: 13.04.17
 * Time: 14:15
 */

namespace app\models;


use yii\db\ActiveRecord;


class Product extends  ActiveRecord
{

    public static function tableName()
    {
        return 'product';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }


}