<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Obyektlar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="obyektlar-form">
    <div class="row">

        <?php $form = ActiveForm::begin(); ?>
        <div class="col-md-4">
            <?= $form->field($model, 'viloyat_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Viloyat::find()->all(), 'id', 'nomi'), ['prompt' => '', 'id' => 'viloyat_id']) ?>

            <?= $form->field($model, 'tuman_id')->dropDownList([], ['prompt' => '', 'id' => 'tuman_id']) ?>

            <?= $form->field($model, 'mfy_id')->dropDownList([], ['prompt' => '', 'id' => 'mfy_id']) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'guzarlar_soni')->textInput() ?>

            <?= $form->field($model, 'internetklub_soni')->textInput() ?>

            <?= $form->field($model, 'uquvmarkaz_soni')->textInput() ?>

            <?= $form->field($model, 'savdodukon_soni')->textInput() ?>

            <?= $form->field($model, 'choyxonalar_soni')->textInput() ?>

            <?= $form->field($model, 'tuyxonalar_soni')->textInput() ?>

            <?= $form->field($model, 'shifoxonalar_soni')->textInput() ?>

            <?= $form->field($model, 'qvplar_soni')->textInput() ?>

            <?= $form->field($model, 'fermerliklar_soni')->textInput() ?>

            <?= $form->field($model, 'bolalarmaydon_soni')->textInput() ?>

            <?= $form->field($model, 'sportmaydon_soni')->textInput() ?>

            <?= $form->field($model, 'masjidlar_soni')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'ziyoratgohlar_soni')->textInput() ?>

            <?= $form->field($model, 'qabristonlar_soni')->textInput() ?>

            <?= $form->field($model, 'boshqadin_ibodatxona_soni')->textInput() ?>

            <?= $form->field($model, 'bozorlar_soni')->textInput() ?>

            <?= $form->field($model, 'novvoyxonalar_soni')->textInput() ?>

            <?= $form->field($model, 'guzalliksalon_soni')->textInput() ?>

            <?= $form->field($model, 'tamirlashustachilik_soni')->textInput() ?>

            <?= $form->field($model, 'diqqatli_joylar_soni')->textInput() ?>

            <?= $form->field($model, 'kutubxonalar_soni')->textInput() ?>

            <?= $form->field($model, 'dorixonalar_soni')->textInput() ?>

            <?= $form->field($model, 'hammomlar_soni')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>
