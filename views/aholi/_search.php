<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\AholiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aholi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'xujaliklar_soni') ?>

    <?= $form->field($model, 'oilalar_soni') ?>

    <?= $form->field($model, 'erkaklar_soni') ?>

    <?= $form->field($model, 'ayollar_soni') ?>

    <?php // echo $form->field($model, 'jami_aholi_soni') ?>

    <?php // echo $form->field($model, 'yosh_bolalar_soni') ?>

    <?php // echo $form->field($model, 'uspirinlar_soni') ?>

    <?php // echo $form->field($model, 'voyaga_yetmaganlar_soni') ?>

    <?php // echo $form->field($model, 'voyaga_yetganlar_soni') ?>

    <?php // echo $form->field($model, 'jami_yoshlar_soni') ?>

    <?php // echo $form->field($model, 'boquvchisini_yuqotgan_oilalar_soni') ?>

    <?php // echo $form->field($model, 'yolgiz_keksalar_soni') ?>

    <?php // echo $form->field($model, 'nogironlar_soni') ?>

    <?php // echo $form->field($model, 'urush_faxriylar_soni') ?>

    <?php // echo $form->field($model, 'pensiyanerlar_soni') ?>

    <?php // echo $form->field($model, 'yuzdan_oshganlar_soni') ?>

    <?php // echo $form->field($model, 'mfy_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
