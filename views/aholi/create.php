<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Aholi */

$this->title = 'Aholi qo\'shish';
$this->params['breadcrumbs'][] = ['label' => 'Aholi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aholi-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
