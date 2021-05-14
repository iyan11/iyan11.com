<?php

namespace frontend\controllers;

use frontend\models\AddCategoriesForm;
use frontend\models\AddProductsForm;
use frontend\models\categories;
use yii\web\Controller;
use yii\helpers\ArrayHelper;

class ShopController extends Controller
{
    public $layout = 'layout_one';
    public function actionIndex(){
        $data = categories::find()->all();
        return  $this->render('index', compact('data'));
    }
    public function actionAdd(){
        $data_cat = ArrayHelper::map(categories::find()->all(), 'id', 'name');
        array_unshift($data_cat, "Нет");

        $add_cat = new AddCategoriesForm();
        if($add_cat->load(\Yii::$app->request->post())){
            if($add_cat->validate()){
                $add_cat->save();
                \Yii::$app->session->setFlash('success','Категории добалены');
                return $this->refresh();
            }else{
                \Yii::$app->session->setFlash('err','Ошибка добавления категорий');
            }
        }

        $add_products = new AddProductsForm();
        if($add_products->load(\Yii::$app->request->post())){
            if($add_products->validate()){
                $add_products->save();
                \Yii::$app->session->setFlash('success','Продукты добавлены');
                return $this->refresh();
            }else{
                \Yii::$app->session->setFlash('err','Ошибка добавления продуктов');
            }
        }
        return $this->render('add', compact('add_cat','add_products','data_cat'));
    }
    public function actionEdit(){
        return $this->render('edit');
    }
}