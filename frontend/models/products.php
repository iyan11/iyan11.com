<?php


namespace frontend\models;


use yii\db\ActiveRecord;

class products extends ActiveRecord
{
    public function getCategories(){
        return $this->hasOne(products::className(),['id' => 'categories_id']);
    }
}