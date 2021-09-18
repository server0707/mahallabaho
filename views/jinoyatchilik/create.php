<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Jinoyatchilik */

$this->title = 'Jinoyatchilik yaratish';
$this->params['breadcrumbs'][] = ['label' => 'Jinoyatchiliklar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jinoyatchilik-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
