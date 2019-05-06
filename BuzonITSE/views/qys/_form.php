<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Tipo;
use app\models\Estatus;
use app\models\dependencia;

/* @var $this yii\web\View */
/* @var $model app\models\Qys */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="qys-form">

    <?php $form = ActiveForm::begin(); ?>

   
    <?=$form->field($model, 'tipo')->dropDownList(ArrayHelper::map( tipo::find()->all(), 'id', 'tipo'), ['id'=>'tipo']);?>

    <?=$form->field($model, 'dependencia')->dropDownList(ArrayHelper::map( dependencia::find()->all(), 'id', 'dependencia'), ['id'=>'dependencia']);?>

    <?= $form->field($model, 'descripcion')->textInput(['maxlength' => true]) ?>
   
    <?=$form->field($model, 'estatus')->dropDownList(ArrayHelper::map( estatus::find()->all(), 'id', 'estatus'), ['id'=>'estatus']);?>

    <?= $form->field($model, 'Imagen')->textInput() ?>

    <?= $form->field($model, 'hora')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
