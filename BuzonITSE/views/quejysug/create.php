<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Quejysug */

$this->title = 'Crear disyuntiva';
$this->params['breadcrumbs'][] = ['label' => 'Registros realizados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="quejysug-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
