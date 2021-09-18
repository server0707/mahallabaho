<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tuman */

$this->title = 'Tumanni yangilash ';
$this->params['breadcrumbs'][] = ['label' => 'Tuman', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nomi, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Yangilash';
?>
<div class="tuman-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
