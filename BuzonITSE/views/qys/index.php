<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\QysSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Qys';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qys-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Qys', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tipo',
            'dependencia',
            'descripcion',
            'estatus',
            //'Imagen',
            //'hora',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
