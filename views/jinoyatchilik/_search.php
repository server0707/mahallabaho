<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\JinoyatchilikSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jinoyatchilik-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'aniqlangan_jinoyat_soni') ?>

    <?= $form->field($model, 'ehtiyotsiz_jinoyat_soni') ?>

    <?= $form->field($model, 'iqtisodiy_jinoyat_soni') ?>

    <?= $form->field($model, 'kasbiy_jinoyat_soni') ?>

    <?php // echo $form->field($model, 'maxsus_jinoyat_soni') ?>

    <?php // echo $form->field($model, 'jami_jinoyat_soni') ?>

    <?php // echo $form->field($model, 'qasddan_odamuldirish_soni') ?>

    <?php // echo $form->field($model, 'ogirshikast_yetkazish_soni') ?>

    <?php // echo $form->field($model, 'ortashikast_yetkazish_soni') ?>

    <?php // echo $form->field($model, 'yengilshikast_yetkazish_soni') ?>

    <?php // echo $form->field($model, 'nomusga_tegish_soni') ?>

    <?php // echo $form->field($model, 'bosqinchilik_soni') ?>

    <?php // echo $form->field($model, 'talonchilik_soni') ?>

    <?php // echo $form->field($model, 'ugrilik_soni') ?>

    <?php // echo $form->field($model, 'giyohvandlik_soni') ?>

    <?php // echo $form->field($model, 'bezorilik_soni') ?>

    <?php // echo $form->field($model, 'boshqajinoyat_soni') ?>

    <?php // echo $form->field($model, 'mahaladagi_jamijinoyat_soni') ?>

    <?php // echo $form->field($model, 'doimiy_yashovchilar_soni') ?>

    <?php // echo $form->field($model, 'boshqa_mahallada_yashovchilar_soni') ?>

    <?php // echo $form->field($model, 'boshqa_tumanda_yashovchilar_soni') ?>

    <?php // echo $form->field($model, 'boshqa_viloyatda_yashovchilar_soni') ?>

    <?php // echo $form->field($model, 'chet_el_fuqarosi_soni') ?>

    <?php // echo $form->field($model, 'jami_shaxslar_soni') ?>

    <?php // echo $form->field($model, 'mfy_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
