<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\QuejysugSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registros realizados';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quejysug-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear nueva disyuntiva', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tipo',
            'departamento',
            'descripcion',
            'estatus',
           [
                'label' => 'Imagen',
                'attribute' => 'Imagen',
                'format'=> 'html',
                'value' => function($model){
                return yii\helpers\Html::img($model->Imagen,['width'=>'150']);
                }
                
            ],


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
