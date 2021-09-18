<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Obyektlar */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Obyektlar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="obyektlar-view">

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
            'guzarlar_soni',
            'internetklub_soni',
            'uquvmarkaz_soni',
            'savdodukon_soni',
            'choyxonalar_soni',
            'tuyxonalar_soni',
            'shifoxonalar_soni',
            'qvplar_soni',
            'fermerliklar_soni',
            'bolalarmaydon_soni',
            'sportmaydon_soni',
            'masjidlar_soni',
            'ziyoratgohlar_soni',
            'qabristonlar_soni',
            'boshqadin_ibodatxona_soni',
            'bozorlar_soni',
            'novvoyxonalar_soni',
            'guzalliksalon_soni',
            'tamirlashustachilik_soni',
            'diqqatli_joylar_soni',
            'kutubxonalar_soni',
            'dorixonalar_soni',
            'hammomlar_soni',
            [
                'attribute'=>'mfy_id',
                'value'=>$model->mfy->nomi,
            ],
        ],
    ]) ?>

</div>
