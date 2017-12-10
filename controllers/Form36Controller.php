<?php

namespace app\controllers;

use Yii;
use app\models\Form36;
use app\models\Form36Search;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;

/**
 * Form36Controller implements the CRUD actions for Form36 model.
 */
class Form36Controller extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Form36 models.
     * @return mixed
     */
    public function actionIndex()
    {
        if(Yii::$app->user->isGuest) { 
            return $this->redirect(['site/login']);
        }

        $searchModel = new Form36Search();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Form36 model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Form36 model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Form36(['laporan_id' => $_GET['id']]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->form_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Form36 model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            date_default_timezone_set('Asia/Jakarta');
            $model->update_at = date("Y-m-d H:i:s");
            $model->save();
            return $this->redirect(['view', 'id' => $model->form_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Form36 model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        
        return $this->redirect(['/laporan']); 
    }

    public function actionApprove($id)
    {
        $model = $this->findModel($id);
        $model->status = 'Valid';
        $model->save();
        
        return $this->redirect(['laporan/form-list', 'id' => $model->laporan_id]);
    }

    public function actionPrint($id)
    {
        $model = $this->findModel($id);
        $content = $this->renderPartial('view',['model' => $model,]);

        date_default_timezone_set('Asia/Jakarta');

        $pdf = new Pdf([
            'mode' => Pdf::MODE_CORE, 
            'format' => Pdf::FORMAT_A4, 
            'orientation' => Pdf::ORIENT_PORTRAIT, 
            'destination' => Pdf::DEST_BROWSER, 
            'content' => $content,
            'options' => [
                'title' => 'Form-36'
            ],
            'methods' => [ 
                'SetHeader'=>['Laporan Bulanan Bank Umum||Form-36'], 
                'SetFooter'=>['Sistem Aplikasi LBU||Generated on ' . date("D, j M Y G:i:s")],
            ]
        ]);

        $response = Yii::$app->response;
        $response->format = \yii\web\Response::FORMAT_RAW;
        $headers = Yii::$app->response->headers;
        $headers->add('Content-Type', 'application/pdf');

        return $pdf->render();
    }

    /**
     * Finds the Form36 model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Form36 the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Form36::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
