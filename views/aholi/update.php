<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aholi */

$this->title = 'Aholini yangilash: ';
$this->params['breadcrumbs'][] = ['label' => 'Aholi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="aholi-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
