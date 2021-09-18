<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php
$this->title = 'Aholini ro\'yxatga olish';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row">
    <div class="col-md-3 text-center">
        <h3>Aholi</h3>
        <p>
            <?= Html::a('+', ['/aholi/create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
    <div class="col-md-3 text-center">
        <h3>Ijtimoiy-muhit</h3>
        <p>
            <?= Html::a('+', ['/ijtimoiy-muhit/create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
    <div class="col-md-3 text-center">
        <h3>Jinoyatchilik</h3>
        <p>
            <?= Html::a('+', ['/jinoyatchilik/create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
    <div class="col-md-3 text-center">
        <h3>Obyekt</h3>
        <p>
            <?= Html::a('+', ['/obyektlar/create'], ['class' => 'btn btn-success']) ?>
        </p>
    </div>
</div>
