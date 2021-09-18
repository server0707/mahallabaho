<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\JinoyatchilikSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Jinoyatchiliklar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jinoyatchilik-index">

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
//            'aniqlangan_jinoyat_soni',
//            'ehtiyotsiz_jinoyat_soni',
//            'iqtisodiy_jinoyat_soni',
//            'kasbiy_jinoyat_soni',
            //'maxsus_jinoyat_soni',
            'jami_jinoyat_soni',
            //'qasddan_odamuldirish_soni',
            //'ogirshikast_yetkazish_soni',
            //'ortashikast_yetkazish_soni',
            //'yengilshikast_yetkazish_soni',
            //'nomusga_tegish_soni',
            //'bosqinchilik_soni',
            //'talonchilik_soni',
            //'ugrilik_soni',
            //'giyohvandlik_soni',
            //'bezorilik_soni',
            //'boshqajinoyat_soni',
            'mahaladagi_jamijinoyat_soni',
            //'doimiy_yashovchilar_soni',
            //'boshqa_mahallada_yashovchilar_soni',
            //'boshqa_tumanda_yashovchilar_soni',
            //'boshqa_viloyatda_yashovchilar_soni',
            //'chet_el_fuqarosi_soni',
            'jami_shaxslar_soni',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
