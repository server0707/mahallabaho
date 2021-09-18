<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\IjtimoiyMuhit */

$this->title = 'Ijtimoiy muhit yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Ijtimoiy muhit', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ijtimoiy-muhit-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
