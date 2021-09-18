<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\AholiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aholi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aholi-index">

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
            'xujaliklar_soni',
//            'oilalar_soni',
//            'erkaklar_soni',
//            'ayollar_soni',
            'jami_aholi_soni',
            //'yosh_bolalar_soni',
            //'uspirinlar_soni',
            //'voyaga_yetmaganlar_soni',
            //'voyaga_yetganlar_soni',
            'jami_yoshlar_soni',
            //'boquvchisini_yuqotgan_oilalar_soni',
            //'yolgiz_keksalar_soni',
            //'nogironlar_soni',
            //'urush_faxriylar_soni',
            //'pensiyanerlar_soni',
            //'yuzdan_oshganlar_soni',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
