<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\IjtimoiyMuhit */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ijtimoiy-muhit-form">
    <div class="row">

        <?php $form = ActiveForm::begin(); ?>

        <div class="col-md-3">
            <?= $form->field($model, 'viloyat_id')->dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Viloyat::find()->all(),'id','nomi'),['prompt'=>'','id'=>'viloyat_id']) ?>

            <?= $form->field($model, 'tuman_id')->dropDownList([],['prompt'=>'','id'=>'tuman_id']) ?>

            <?= $form->field($model, 'mfy_id')->dropDownList([],['prompt'=>'','id'=>'mfy_id']) ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'nafaqaoluvchilar14_soni')->textInput() ?>

            <?= $form->field($model, 'nafaqaoluvchilar2_soni')->textInput() ?>

            <?= $form->field($model, 'nogiron_nafaqachilar_soni')->textInput() ?>

            <?= $form->field($model, 'oilaviy_ajirim_soni')->textInput() ?>

            <?= $form->field($model, 'yosh_ajirimlar_soni')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'pxt_notinchoila_soni')->textInput() ?>

            <?= $form->field($model, 'pxt_giyohvandlar_soni')->textInput() ?>

            <?= $form->field($model, 'pxt_qushmachilar_soni')->textInput() ?>

            <?= $form->field($model, 'pxt_yengiltabiatayol_soni')->textInput() ?>

            <?= $form->field($model, 'pxt_ekstrimistlar_soni')->textInput() ?>
        </div>
        <div class="col-md-3">
            <?= $form->field($model, 'kamtaminlanganlar_soni')->textInput() ?>

            <?= $form->field($model, 'moddiyyordamchilar_soni')->textInput() ?>

            <?= $form->field($model, 'ishsizlar_soni')->textInput() ?>

            <div class="form-group">
                <?= Html::submitButton('Saqlash', ['class' => 'btn btn-success', 'style'=>'width: 100%']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>
