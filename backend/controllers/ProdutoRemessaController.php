<?php

namespace backend\controllers;

use Yii;
use backend\models\ProdutoRemessa;
use backend\models\ProdutoRemessaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProdutoRemessaController implements the CRUD actions for ProdutoRemessa model.
 */
class ProdutoRemessaController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all ProdutoRemessa models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProdutoRemessaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProdutoRemessa model.
     * @param integer $produtos_id
     * @param integer $remessas_id
     * @return mixed
     */
    public function actionView($produtos_id, $remessas_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($produtos_id, $remessas_id),
        ]);
    }

    /**
     * Creates a new ProdutoRemessa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProdutoRemessa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'produtos_id' => $model->produtos_id, 'remessas_id' => $model->remessas_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ProdutoRemessa model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $produtos_id
     * @param integer $remessas_id
     * @return mixed
     */
    public function actionUpdate($produtos_id, $remessas_id)
    {
        $model = $this->findModel($produtos_id, $remessas_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'produtos_id' => $model->produtos_id, 'remessas_id' => $model->remessas_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ProdutoRemessa model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $produtos_id
     * @param integer $remessas_id
     * @return mixed
     */
    public function actionDelete($produtos_id, $remessas_id)
    {
        $this->findModel($produtos_id, $remessas_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProdutoRemessa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $produtos_id
     * @param integer $remessas_id
     * @return ProdutoRemessa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($produtos_id, $remessas_id)
    {
        if (($model = ProdutoRemessa::findOne(['produtos_id' => $produtos_id, 'remessas_id' => $remessas_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
