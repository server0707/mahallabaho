<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\IjtimoiyMuhitSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ijtimoiy-muhit-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kamtaminlanganlar_soni') ?>

    <?= $form->field($model, 'moddiyyordamchilar_soni') ?>

    <?= $form->field($model, 'nafaqaoluvchilar14_soni') ?>

    <?= $form->field($model, 'nafaqaoluvchilar2_soni') ?>

    <?php // echo $form->field($model, 'nogiron_nafaqachilar_soni') ?>

    <?php // echo $form->field($model, 'oilaviy_ajirim_soni') ?>

    <?php // echo $form->field($model, 'yosh_ajirimlar_soni') ?>

    <?php // echo $form->field($model, 'pxt_notinchoila_soni') ?>

    <?php // echo $form->field($model, 'pxt_giyohvandlar_soni') ?>

    <?php // echo $form->field($model, 'pxt_qushmachilar_soni') ?>

    <?php // echo $form->field($model, 'pxt_yengiltabiatayol_soni') ?>

    <?php // echo $form->field($model, 'pxt_ekstrimistlar_soni') ?>

    <?php // echo $form->field($model, 'ishsizlar_soni') ?>

    <?php // echo $form->field($model, 'mfy_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
