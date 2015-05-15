<?php

namespace backend\controllers;

use Yii;
use backend\models\ProdutoPedido;
use backend\models\ProdutoPedidoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProdutoPedidoController implements the CRUD actions for ProdutoPedido model.
 */
class ProdutoPedidoController extends Controller
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
     * Lists all ProdutoPedido models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProdutoPedidoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProdutoPedido model.
     * @param integer $produtos_id
     * @param integer $pedidos_id
     * @return mixed
     */
    public function actionView($produtos_id, $pedidos_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($produtos_id, $pedidos_id),
        ]);
    }

    /**
     * Creates a new ProdutoPedido model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProdutoPedido();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'produtos_id' => $model->produtos_id, 'pedidos_id' => $model->pedidos_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing ProdutoPedido model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $produtos_id
     * @param integer $pedidos_id
     * @return mixed
     */
    public function actionUpdate($produtos_id, $pedidos_id)
    {
        $model = $this->findModel($produtos_id, $pedidos_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'produtos_id' => $model->produtos_id, 'pedidos_id' => $model->pedidos_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing ProdutoPedido model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $produtos_id
     * @param integer $pedidos_id
     * @return mixed
     */
    public function actionDelete($produtos_id, $pedidos_id)
    {
        $this->findModel($produtos_id, $pedidos_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ProdutoPedido model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $produtos_id
     * @param integer $pedidos_id
     * @return ProdutoPedido the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($produtos_id, $pedidos_id)
    {
        if (($model = ProdutoPedido::findOne(['produtos_id' => $produtos_id, 'pedidos_id' => $pedidos_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
