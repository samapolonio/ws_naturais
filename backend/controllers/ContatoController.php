<?php

namespace backend\controllers;

use Yii;
use backend\models\Contato;
use backend\models\ContatoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ContatoController implements the CRUD actions for Contato model.
 */
class ContatoController extends Controller
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
     * Lists all Contato models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ContatoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Contato model.
     * @param integer $id_contatos
     * @param integer $clientes_id
     * @return mixed
     */
    public function actionView($id_contatos, $clientes_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_contatos, $clientes_id),
        ]);
    }

    /**
     * Creates a new Contato model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Contato();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_contatos' => $model->id_contatos, 'clientes_id' => $model->clientes_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Contato model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id_contatos
     * @param integer $clientes_id
     * @return mixed
     */
    public function actionUpdate($id_contatos, $clientes_id)
    {
        $model = $this->findModel($id_contatos, $clientes_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_contatos' => $model->id_contatos, 'clientes_id' => $model->clientes_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Contato model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id_contatos
     * @param integer $clientes_id
     * @return mixed
     */
    public function actionDelete($id_contatos, $clientes_id)
    {
        $this->findModel($id_contatos, $clientes_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Contato model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id_contatos
     * @param integer $clientes_id
     * @return Contato the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_contatos, $clientes_id)
    {
        if (($model = Contato::findOne(['id_contatos' => $id_contatos, 'clientes_id' => $clientes_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
