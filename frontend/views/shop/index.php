<?php

/* @var $this yii\web\View */
use frontend\models\categories;
$this->title = 'Главная страница - '.Yii::$app->name;
?>

<h1>Данные</h1>
<?php
foreach($data as $one){
    echo "id: ".$one['id']."<br>";
    echo "name: ".$one['name']."<br>";
    $temp = $one['parent'];
    if($temp != 0) $arr_parent = categories::find()->select('name')->where("id = $temp")->one();
    else $arr_parent = "";
    if(isset($arr_parent['name'])){
        echo "Принаделжит к категории <b>".$arr_parent['name']."</b><br>";
    }else{
        echo "Нет категории <br>";
    }
    echo "desc: ".$one['descript']."<br>";
    echo "<hr>";
}
?>