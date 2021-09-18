<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Viloyat */

$this->title = 'Viloyatni yangilash ';
$this->params['breadcrumbs'][] = ['label' => 'Viloyatlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nomi, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Yangilash';
?>
<div class="viloyat-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
