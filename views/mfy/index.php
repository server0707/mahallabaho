<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\MfySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mahalla fermerlar yig\'inlari';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mfy-index">

    <p>
        <?= (Yii::$app->user->identity->isAdmin)?Html::a('+', ['create'], ['class' => 'btn btn-success']) : ""?>
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
                    'attribute'=>'tuman_id',
                    'value'=>function($data) {
                        return $data->tuman->nomi;
                    },
                    'filter'=>\yii\helpers\ArrayHelper::map(\app\models\Tuman::find()->all(),'id','nomi'),
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
