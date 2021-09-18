<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Obyektlar */

$this->title = 'Obyekt yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Obyektlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obyektlar-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
