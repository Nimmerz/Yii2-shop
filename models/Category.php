<?php
/**
 * Created by PhpStorm.
 * User: Nimmerz
 * Date: 13.04.17
 * Time: 14:06
 */

namespace app\models;

use yii\db\ActiveRecord;


class Category extends  ActiveRecord
{

    public static function tableName()
    {
        return 'category';
    }

    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['category_id' => 'id']);
    }


}