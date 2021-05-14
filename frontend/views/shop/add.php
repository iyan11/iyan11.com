<?php

/* @var $this yii\web\View */
use yii\widgets\ActiveForm;
use yii\helpers\Html;
$this->title = 'Добавить товар и категорию - '.Yii::$app->name;
?>
<h1>Добавить категорию</h1>

<?php $form_1 = ActiveForm::begin(['options' => ['id' => 'add_categories']]); ?>
    <?= $form_1->field($add_cat,'name') ?>
    <?= $form_1->field($add_cat,'parent')->listBox($data_cat,['size'=> '1']); ?>
    <?= $form_1->field($add_cat,'descript')->textarea(['rows' => '5']); ?>
    <?= Html::submitButton('Добавить', ['class' => 'btn btn-block btn-success'])?>
<?php ActiveForm::end() ?>
<hr>
<h1>Добавить продукт</h1>
<hr>
<?php

$form_2 = ActiveForm::begin(['options' => ['id' => 'add_products']]);
echo $form_2->field($add_products,'name');
echo $form_2->field($add_products,'description')->textarea(['rows' => '5']);
echo $form_2->field($add_products,'price')->input('number',['min' => '1','max' => '999999','value' => '100','step' => '0.01']);
echo $form_2->field($add_products,'categories_id')->listBox($data_cat,['size'=> '1']);
echo Html::submitButton('Добавить',['class' => 'btn btn-block btn-success']);
ActiveForm::end();
?>
