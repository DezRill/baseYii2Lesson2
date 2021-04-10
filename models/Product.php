<?php
/**
 * Created by PhpStorm.
 * User: Dezrill
 * Date: 10.04.2021
 * Time: 19:54
 */

namespace app\models;


use yii\db\ActiveRecord;

class Product extends ActiveRecord
{
    public function getCategory() {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

}