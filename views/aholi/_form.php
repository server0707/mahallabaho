<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Aholi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aholi-form">

    <div class="row">
        <?php $form = ActiveForm::begin(); ?>
        <div class="col-md-3">
            <?= $form->field($model, 'viloyat_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Viloyat::find()->all(),'id','nomi'),['prompt'=>'','id'=>'viloyat_id']) ?>

            <?= $form->field($model, 'tuman_id')->dropDownList([],['prompt'=>'','id'=>'tuman_id']) ?>

            <?= $form->field($model, 'mfy_id')->dropDownList([],['prompt'=>'','id'=>'mfy_id']) ?>
        </div>
        <div class="col-md-3">

            <?= $form->field($model, 'xujaliklar_soni')->textInput() ?>

            <?= $form->field($model, 'oilalar_soni')->textInput() ?>

            <?= $form->field($model, 'erkaklar_soni')->textInput() ?>

            <?= $form->field($model, 'ayollar_soni')->textInput() ?>

            <!--    --><?//= $form->field($model, 'jami_aholi_soni')->textInput() ?>
        </div>
        <div class="col-md-3">

            <?= $form->field($model, 'yosh_bolalar_soni')->textInput() ?>

            <?= $form->field($model, 'uspirinlar_soni')->textInput() ?>

            <?= $form->field($model, 'voyaga_yetmaganlar_soni')->textInput() ?>

            <?= $form->field($model, 'voyaga_yetganlar_soni')->textInput() ?>

            <!--    --><?//= $form->field($model, 'jami_yoshlar_soni')->textInput() ?>
        </div>
        <div class="col-md-3">

            <?= $form->field($model, 'boquvchisini_yuqotgan_oilalar_soni')->textInput() ?>

            <?= $form->field($model, 'yolgiz_keksalar_soni')->textInput() ?>

            <?= $form->field($model, 'nogironlar_soni')->textInput() ?>

            <?= $form->field($model, 'urush_faxriylar_soni')->textInput() ?>

            <?= $form->field($model, 'pensiyanerlar_soni')->textInput() ?>

            <?= $form->field($model, 'yuzdan_oshganlar_soni')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success', 'style'=>'width: 100%']) ?>
            </div>

        </div>
        <?php ActiveForm::end(); ?>
    </div>

</div>
