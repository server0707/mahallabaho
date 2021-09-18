<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Obyektlar */

$this->title = 'Obyektni yangilash: ';
$this->params['breadcrumbs'][] = ['label' => 'Obyektlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Yangilash';
?>
<div class="obyektlar-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
