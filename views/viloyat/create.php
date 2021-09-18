<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Viloyat */

$this->title = 'Viloyat qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Viloyatlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="viloyat-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
