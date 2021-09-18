<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\ObyektlarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Obyektlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obyektlar-index">

    <p>
        <?= Html::a('+', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute'=>'mfy_id',
                'value'=>function($model){
                    return $model->mfy->nomi;
                },
                'filter'=>\yii\helpers\ArrayHelper::map(\app\models\Mfy::find()->all(),'id','nomi'),
            ],
            'guzarlar_soni',
//            'internetklub_soni',
//            'uquvmarkaz_soni',
            'savdodukon_soni',
            'choyxonalar_soni',
            //'tuyxonalar_soni',
            //'shifoxonalar_soni',
            //'qvplar_soni',
            //'fermerliklar_soni',
            //'bolalarmaydon_soni',
            //'sportmaydon_soni',
            //'masjidlar_soni',
            //'ziyoratgohlar_soni',
            //'qabristonlar_soni',
            //'boshqadin_ibodatxona_soni',
            //'bozorlar_soni',
            //'novvoyxonalar_soni',
            //'guzalliksalon_soni',
            //'tamirlashustachilik_soni',
            //'diqqatli_joylar_soni',
            //'kutubxonalar_soni',
            //'dorixonalar_soni',
            //'hammomlar_soni',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
