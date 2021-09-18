<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mfy */

$this->title = 'Mahalla fermerlar yi\'ginini yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Mahalla fermerlar yig\'inlari', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mfy-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
