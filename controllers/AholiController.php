<?php

namespace app\controllers;

use app\models\Aholi;
use app\models\Mfy;
use app\models\search\AholiSearch;
use app\models\Tuman;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\Response;

/**
 * AholiController implements the CRUD actions for Aholi model.
 */
class AholiController extends Controller
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
                        'actions' => ['index', 'view', 'create','change-tuman','change-viloyat'],
                        'roles' => ['@'],
                    ],
                    [
                        'allow' => true,
                        'actions' => ['update', 'delete'],
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
     * Lists all Aholi models.
     * @return mixed
     */
    public function actionIndex()
    {

        $searchModel = new AholiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Aholi model.
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
     * Creates a new Aholi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Aholi();

        if ($model->load(Yii::$app->request->post())) {
            $model->jami_aholi_soni = (int)$model->erkaklar_soni + (int)$model->ayollar_soni;

            $model->jami_yoshlar_soni = (int)$model->yosh_bolalar_soni
                + (int)$model->uspirinlar_soni +
                +(int)$model->voyaga_yetganlar_soni +
                +(int)$model->voyaga_yetmaganlar_soni;

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
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
     * Updates an existing Aholi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->jami_aholi_soni = (int)$model->erkaklar_soni + (int)$model->ayollar_soni;

            $model->jami_yoshlar_soni = (int)$model->yosh_bolalar_soni
                + (int)$model->uspirinlar_soni +
                +(int)$model->voyaga_yetganlar_soni +
                +(int)$model->voyaga_yetmaganlar_soni;

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
     * Deletes an existing Aholi model.
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
     * Finds the Aholi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Aholi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Aholi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionChangeViloyat(){
        $id = Yii::$app->request->post('id');
        $tumanlar = Tuman::find()->where(['viloyat_id'=>$id])->all();

        Yii::$app->response->format = Response::FORMAT_JSON;
        if (Yii::$app->request->isAjax){
            return $tumanlar;
        }
    }

    public function actionChangeTuman(){
        $id = Yii::$app->request->post('id');
        $mfylar = Mfy::find()->where(['tuman_id'=>$id])->all();

        Yii::$app->response->format = Response::FORMAT_JSON;
        if (Yii::$app->request->isAjax){
            return $mfylar;
        }
    }
}
