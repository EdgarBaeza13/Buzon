<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Departamento;
use app\models\Tipo;
use app\models\Estatus;



/* @var $this yii\web\View */
/* @var $model app\models\Quejysug */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="quejysug-form">

    <?php $form = ActiveForm::begin(); ?>
    
   

   
     <?=$form->field($model, 'tipo')->dropDownList(ArrayHelper::map( tipo::find()->all(), 'id', 'tipo'), ['id'=>'tipo']);?>

     <?=$form->field($model, 'departamento')->dropDownList(ArrayHelper::map( departamento::find()->all(), 'id', 'departamento'), ['id'=>'departamento']);?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>

       <?=$form->field($model, 'estatus')->dropDownList(ArrayHelper::map( estatus::find()->all(), 'id', 'estatus'), ['id'=>'estatus']);?>

    <?= $form->field($model, 'Imagen')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
