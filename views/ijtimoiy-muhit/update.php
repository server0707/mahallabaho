<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IjtimoiyMuhit */

$this->title = 'Ijtimoiy muhit yangilash: ';
$this->params['breadcrumbs'][] = ['label' => 'Ijtimoiy muhit', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Yangilash';
?>
<div class="ijtimoiy-muhit-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
