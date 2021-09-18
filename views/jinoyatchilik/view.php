<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Jinoyatchilik */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Jinoyatchiliklar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="jinoyatchilik-view">

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
            'aniqlangan_jinoyat_soni',
            'ehtiyotsiz_jinoyat_soni',
            'iqtisodiy_jinoyat_soni',
            'kasbiy_jinoyat_soni',
            'maxsus_jinoyat_soni',
            'jami_jinoyat_soni',
            'qasddan_odamuldirish_soni',
            'ogirshikast_yetkazish_soni',
            'ortashikast_yetkazish_soni',
            'yengilshikast_yetkazish_soni',
            'nomusga_tegish_soni',
            'bosqinchilik_soni',
            'talonchilik_soni',
            'ugrilik_soni',
            'giyohvandlik_soni',
            'bezorilik_soni',
            'boshqajinoyat_soni',
            'mahaladagi_jamijinoyat_soni',
            'doimiy_yashovchilar_soni',
            'boshqa_mahallada_yashovchilar_soni',
            'boshqa_tumanda_yashovchilar_soni',
            'boshqa_viloyatda_yashovchilar_soni',
            'chet_el_fuqarosi_soni',
            'jami_shaxslar_soni',
            [
                'attribute'=>'mfy_id',
                'value'=>$model->mfy->nomi,
            ],
        ],
    ]) ?>

</div>
