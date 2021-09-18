<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\IjtimoiyMuhit */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ijtimoiy muhit', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="ijtimoiy-muhit-view">

    <?php if (Yii::$app->user->identity->isAdmin) : ?>
        <p>
            <?= Html::a('Yangilash', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => 'Are you sure you want to delete this item?',
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    <?php endif; ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
//            'id',
            'kamtaminlanganlar_soni',
            'moddiyyordamchilar_soni',
            'nafaqaoluvchilar14_soni',
            'nafaqaoluvchilar2_soni',
            'nogiron_nafaqachilar_soni',
            'oilaviy_ajirim_soni',
            'yosh_ajirimlar_soni',
            'pxt_notinchoila_soni',
            'pxt_giyohvandlar_soni',
            'pxt_qushmachilar_soni',
            'pxt_yengiltabiatayol_soni',
            'pxt_ekstrimistlar_soni',
            'ishsizlar_soni',
            [
                'attribute'=>'mfy_id',
                'value'=>$model->mfy->nomi,
            ],
        ],
    ]) ?>

</div>
