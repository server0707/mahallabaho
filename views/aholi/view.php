<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aholi */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Aholi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="aholi-view">

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
            'xujaliklar_soni',
            'oilalar_soni',
            'erkaklar_soni',
            'ayollar_soni',
            'jami_aholi_soni',
            'yosh_bolalar_soni',
            'uspirinlar_soni',
            'voyaga_yetmaganlar_soni',
            'voyaga_yetganlar_soni',
            'jami_yoshlar_soni',
            'boquvchisini_yuqotgan_oilalar_soni',
            'yolgiz_keksalar_soni',
            'nogironlar_soni',
            'urush_faxriylar_soni',
            'pensiyanerlar_soni',
            'yuzdan_oshganlar_soni',
            [
                    'attribute'=>'mfy_id',
                    'value'=>$model->mfy->nomi,
            ],
        ],
    ]) ?>

</div>
