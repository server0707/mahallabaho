<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Jinoyatchilik */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jinoyatchilik-form">
    <div class="row">

        <?php $form = ActiveForm::begin(); ?>
        <div class="col-md-4">
            <?= $form->field($model, 'viloyat_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Viloyat::find()->all(), 'id', 'nomi'), ['prompt' => '', 'id' => 'viloyat_id']) ?>

            <?= $form->field($model, 'tuman_id')->dropDownList([], ['prompt' => '', 'id' => 'tuman_id']) ?>

            <?= $form->field($model, 'mfy_id')->dropDownList([], ['prompt' => '', 'id' => 'mfy_id']) ?>
        </div>

        <div class="col-md-4">
            <?= $form->field($model, 'aniqlangan_jinoyat_soni')->textInput() ?>

            <?= $form->field($model, 'ehtiyotsiz_jinoyat_soni')->textInput() ?>

            <?= $form->field($model, 'iqtisodiy_jinoyat_soni')->textInput() ?>

            <?= $form->field($model, 'kasbiy_jinoyat_soni')->textInput() ?>

            <?= $form->field($model, 'maxsus_jinoyat_soni')->textInput() ?>

            <!--    --><? //= $form->field($model, 'jami_jinoyat_soni')->textInput() ?>

            <?= $form->field($model, 'qasddan_odamuldirish_soni')->textInput() ?>

            <?= $form->field($model, 'ogirshikast_yetkazish_soni')->textInput() ?>

            <?= $form->field($model, 'ortashikast_yetkazish_soni')->textInput() ?>

            <?= $form->field($model, 'yengilshikast_yetkazish_soni')->textInput() ?>

            <?= $form->field($model, 'nomusga_tegish_soni')->textInput() ?>
            <!--    --><? //= $form->field($model, 'mahaladagi_jamijinoyat_soni')->textInput() ?>
        </div>
        <div class="col-md-4">

            <?= $form->field($model, 'bosqinchilik_soni')->textInput() ?>

            <?= $form->field($model, 'talonchilik_soni')->textInput() ?>

            <?= $form->field($model, 'ugrilik_soni')->textInput() ?>

            <?= $form->field($model, 'giyohvandlik_soni')->textInput() ?>

            <?= $form->field($model, 'bezorilik_soni')->textInput() ?>

            <?= $form->field($model, 'boshqajinoyat_soni')->textInput() ?>

            <?= $form->field($model, 'doimiy_yashovchilar_soni')->textInput() ?>

            <?= $form->field($model, 'boshqa_mahallada_yashovchilar_soni')->textInput() ?>

            <?= $form->field($model, 'boshqa_tumanda_yashovchilar_soni')->textInput() ?>

            <?= $form->field($model, 'boshqa_viloyatda_yashovchilar_soni')->textInput() ?>

            <?= $form->field($model, 'chet_el_fuqarosi_soni')->textInput() ?>

            <!--    --><? //= $form->field($model, 'jami_shaxslar_soni')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success','style'=>'width: 100%']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
