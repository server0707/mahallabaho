<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mfy */

$this->title = 'Mahalla fermerlar yi\'ginini yangilash ';
$this->params['breadcrumbs'][] = ['label' => 'Mahalla fermerlar yig\'inlari', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nomi, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Yangilash';
?>
<div class="mfy-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
