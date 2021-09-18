<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\search\IjtimoiyMuhitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ijtimoiy muhitlar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ijtimoiy-muhit-index">

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
            'kamtaminlanganlar_soni',
            'moddiyyordamchilar_soni',
//            'nafaqaoluvchilar14_soni',
//            'nafaqaoluvchilar2_soni',
            'nogiron_nafaqachilar_soni',
            //'oilaviy_ajirim_soni',
            //'yosh_ajirimlar_soni',
            //'pxt_notinchoila_soni',
            //'pxt_giyohvandlar_soni',
            //'pxt_qushmachilar_soni',
            //'pxt_yengiltabiatayol_soni',
            //'pxt_ekstrimistlar_soni',
            //'ishsizlar_soni',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
