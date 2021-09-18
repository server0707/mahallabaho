<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\ObyektlarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="obyektlar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'guzarlar_soni') ?>

    <?= $form->field($model, 'internetklub_soni') ?>

    <?= $form->field($model, 'uquvmarkaz_soni') ?>

    <?= $form->field($model, 'savdodukon_soni') ?>

    <?php // echo $form->field($model, 'choyxonalar_soni') ?>

    <?php // echo $form->field($model, 'tuyxonalar_soni') ?>

    <?php // echo $form->field($model, 'shifoxonalar_soni') ?>

    <?php // echo $form->field($model, 'qvplar_soni') ?>

    <?php // echo $form->field($model, 'fermerliklar_soni') ?>

    <?php // echo $form->field($model, 'bolalarmaydon_soni') ?>

    <?php // echo $form->field($model, 'sportmaydon_soni') ?>

    <?php // echo $form->field($model, 'masjidlar_soni') ?>

    <?php // echo $form->field($model, 'ziyoratgohlar_soni') ?>

    <?php // echo $form->field($model, 'qabristonlar_soni') ?>

    <?php // echo $form->field($model, 'boshqadin_ibodatxona_soni') ?>

    <?php // echo $form->field($model, 'bozorlar_soni') ?>

    <?php // echo $form->field($model, 'novvoyxonalar_soni') ?>

    <?php // echo $form->field($model, 'guzalliksalon_soni') ?>

    <?php // echo $form->field($model, 'tamirlashustachilik_soni') ?>

    <?php // echo $form->field($model, 'diqqatli_joylar_soni') ?>

    <?php // echo $form->field($model, 'kutubxonalar_soni') ?>

    <?php // echo $form->field($model, 'dorixonalar_soni') ?>

    <?php // echo $form->field($model, 'hammomlar_soni') ?>

    <?php // echo $form->field($model, 'mfy_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
