<?php


namespace frontend\models;


use yii\db\ActiveRecord;

class AddCategoriesForm extends ActiveRecord
{

    public static function tableName(){
        return 'categories';
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'parent' => 'Подкатегория для:',
            'descript' => 'Описание',
        ];
    }

    public function rules()
    {
        return [
            [['name','descript'],'required'],
            [['name','parent','descript'],'trim'],
        ];
    }
}