<?php

namespace app\controllers;

use Yii;
use app\models\Jinoyatchilik;
use app\models\search\JinoyatchilikSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JinoyatchilikController implements the CRUD actions for Jinoyatchilik model.
 */
class JinoyatchilikController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'denyCallback' => function ($rule, $action) {
                    throw new \yii\web\NotFoundHttpException();
                },
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index','view', 'create'],
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => true,
                        'actions'=>['update','delete'],
                        'matchCallback' => function ($rule, $action) {
                            return Yii::$app->user->identity->isAdmin;
                        }
                    ]
                ]
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Jinoyatchilik models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new JinoyatchilikSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Jinoyatchilik model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Jinoyatchilik model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Jinoyatchilik();

        if ($model->load(Yii::$app->request->post())) {
            $model->jami_jinoyat_soni = $model->aniqlangan_jinoyat_soni+
                $model->ehtiyotsiz_jinoyat_soni+
                $model->iqtisodiy_jinoyat_soni+
                $model->kasbiy_jinoyat_soni+
                $model->maxsus_jinoyat_soni;

            $model->mahaladagi_jamijinoyat_soni = $model->qasddan_odamuldirish_soni+
                $model->ogirshikast_yetkazish_soni+
                $model->ortashikast_yetkazish_soni+
                $model->yengilshikast_yetkazish_soni+
                $model->nomusga_tegish_soni+
                $model->bosqinchilik_soni+
                $model->talonchilik_soni+
                $model->ugrilik_soni+
                $model->giyohvandlik_soni+
                $model->bezorilik_soni+
                $model->boshqajinoyat_soni;

            $model->jami_shaxslar_soni = $model->doimiy_yashovchilar_soni+
                $model->boshqa_mahallada_yashovchilar_soni+
                $model->boshqa_tumanda_yashovchilar_soni+
                $model->boshqa_viloyatda_yashovchilar_soni+
                $model->chet_el_fuqarosi_soni;

            if ( $model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Jinoyatchilik model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->jami_jinoyat_soni = $model->aniqlangan_jinoyat_soni+
                $model->ehtiyotsiz_jinoyat_soni+
                $model->iqtisodiy_jinoyat_soni+
                $model->kasbiy_jinoyat_soni+
                $model->maxsus_jinoyat_soni;

            $model->mahaladagi_jamijinoyat_soni = $model->qasddan_odamuldirish_soni+
                $model->ogirshikast_yetkazish_soni+
                $model->ortashikast_yetkazish_soni+
                $model->yengilshikast_yetkazish_soni+
                $model->nomusga_tegish_soni+
                $model->bosqinchilik_soni+
                $model->talonchilik_soni+
                $model->ugrilik_soni+
                $model->giyohvandlik_soni+
                $model->bezorilik_soni+
                $model->boshqajinoyat_soni;

            $model->jami_shaxslar_soni = $model->doimiy_yashovchilar_soni+
                $model->boshqa_mahallada_yashovchilar_soni+
                $model->boshqa_tumanda_yashovchilar_soni+
                $model->boshqa_viloyatda_yashovchilar_soni+
                $model->chet_el_fuqarosi_soni;

            if ($model->save()){
                return $this->redirect(['view', 'id' => $model->id]);
            }else{
                return $this->render('update', [
                    'model' => $model,
                ]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Jinoyatchilik model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Jinoyatchilik model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Jinoyatchilik the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Jinoyatchilik::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
