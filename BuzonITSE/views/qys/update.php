<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Qys */

$this->title = 'Update Qys: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Qys', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="qys-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
