<?php

namespace app\controllers;

use Yii;
use app\models\Quejysug;
use app\models\QuejysugSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;
/**
 * QuejysugController implements the CRUD actions for Quejysug model.
 */
class QuejysugController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
                        'access' => [
              'class'=>AccessControl::className(),
                'only'=> ['update','delete'],
                'rules'=> [
                    [
                     'allow'=> true,
                        'roles'=> ['@'], 
                    ],
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
     * Lists all Quejysug models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new QuejysugSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Quejysug model.
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
     * Creates a new Quejysug model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Quejysug();

        if ($model->load(Yii::$app->request->post())) {
           $model -> Imagen = UploadedFile::getInstance($model, 'Imagen');
            
            $image_name = $model->tipo.rand(1, 4000).'.'.$model->Imagen->extension;
            $image_path = 'uploads/'.$image_name;
            $model->Imagen->SaveAs($image_path);
            $model->Imagen = $image_path;
            $model->save(false);

            
            return $this->redirect(['view', 'id' => $model->id]);
            
    }else{
        
        

        return $this->render('create', [
            'model' => $model,
        ]);
       }
    }



    /**
     * Updates an existing Quejysug model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Quejysug model.
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
     * Finds the Quejysug model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Quejysug the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Quejysug::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
