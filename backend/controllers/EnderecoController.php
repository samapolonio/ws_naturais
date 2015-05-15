<?php

namespace backend\controllers;

use Yii;
use backend\models\Endereco;
use backend\models\EnderecoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EnderecoController implements the CRUD actions for Endereco model.
 */
class EnderecoController extends Controller
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
     * Lists all Endereco models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EnderecoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Endereco model.
     * @param integer $id_enderecos
     * @param integer $clientes_id
     * @return mixed
     */
    public function actionView($id_enderecos, $clientes_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_enderecos, $clientes_id),
        ]);
    }

    /**
     * Creates a new Endereco model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Endereco();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_enderecos' => $model->id_enderecos, 'clientes_id' => $model->clientes_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Endereco model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_enderecos
     * @param integer $clientes_id
     * @return mixed
     */
    public function actionUpdate($id_enderecos, $clientes_id)
    {
        $model = $this->findModel($id_enderecos, $clientes_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_enderecos' => $model->id_enderecos, 'clientes_id' => $model->clientes_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Endereco model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_enderecos
     * @param integer $clientes_id
     * @return mixed
     */
    public function actionDelete($id_enderecos, $clientes_id)
    {
        $this->findModel($id_enderecos, $clientes_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Endereco model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_enderecos
     * @param integer $clientes_id
     * @return Endereco the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_enderecos, $clientes_id)
    {
        if (($model = Endereco::findOne(['id_enderecos' => $id_enderecos, 'clientes_id' => $clientes_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
