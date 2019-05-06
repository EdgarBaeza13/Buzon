<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Qys */

$this->title = 'Create Qys';
$this->params['breadcrumbs'][] = ['label' => 'Qys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="qys-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
