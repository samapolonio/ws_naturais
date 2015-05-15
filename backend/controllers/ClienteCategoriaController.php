<?php

namespace backend\controllers;

use Yii;
use backend\models\ClienteCategoria;
use backend\models\ClienteCategoriaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClienteCategoriaController implements the CRUD actions for ClienteCategoria model.
 */
class ClienteCategoriaController extends Controller
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
     * Lists all ClienteCategoria models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClienteCategoriaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ClienteCategoria model.
     * @param integer $clientes_id
     * @param integer $categorias_id
     * @return mixed
     */
    public function actionView($clientes_id, $categorias_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($clientes_id, $categorias_id),
        ]);
    }

    /**
     * Creates a new ClienteCategoria model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ClienteCategoria();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'clientes_id' => $model->clientes_id, 'categorias_id' => $model->categorias_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ClienteCategoria model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $clientes_id
     * @param integer $categorias_id
     * @return mixed
     */
    public function actionUpdate($clientes_id, $categorias_id)
    {
        $model = $this->findModel($clientes_id, $categorias_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'clientes_id' => $model->clientes_id, 'categorias_id' => $model->categorias_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ClienteCategoria model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $clientes_id
     * @param integer $categorias_id
     * @return mixed
     */
    public function actionDelete($clientes_id, $categorias_id)
    {
        $this->findModel($clientes_id, $categorias_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ClienteCategoria model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $clientes_id
     * @param integer $categorias_id
     * @return ClienteCategoria the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($clientes_id, $categorias_id)
    {
        if (($model = ClienteCategoria::findOne(['clientes_id' => $clientes_id, 'categorias_id' => $categorias_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
