<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\TumanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tumanlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tuman-index">

    <p>
        <?= (Yii::$app->user->identity->isAdmin)?Html::a('+', ['create'], ['class' => 'btn btn-success']) : '' ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'nomi',
            [
                'attribute'=>'viloyat_id',
                'value'=>function($data){
                    return $data->viloyat->nomi;
                },
                'filter'=>\yii\helpers\ArrayHelper::map(\app\models\Viloyat::find()->all(),'id','nomi'),
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
