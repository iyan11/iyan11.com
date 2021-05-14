<?php


namespace frontend\models;


use yii\db\ActiveRecord;

class categories extends ActiveRecord
{
    public function getProducts(){
        return $this->hasMany(products::className(),['categories_id' => 'id']);
    }
}