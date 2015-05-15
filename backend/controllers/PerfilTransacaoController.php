<?php

namespace backend\controllers;

use Yii;
use backend\models\PerfilTransacao;
use backend\models\PerfilTransacaoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerfilTransacaoController implements the CRUD actions for PerfilTransacao model.
 */
class PerfilTransacaoController extends Controller
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
     * Lists all PerfilTransacao models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PerfilTransacaoSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PerfilTransacao model.
     * @param integer $transacoes_id
     * @param integer $perfis_id
     * @return mixed
     */
    public function actionView($transacoes_id, $perfis_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($transacoes_id, $perfis_id),
        ]);
    }

    /**
     * Creates a new PerfilTransacao model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new PerfilTransacao();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'transacoes_id' => $model->transacoes_id, 'perfis_id' => $model->perfis_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing PerfilTransacao model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $transacoes_id
     * @param integer $perfis_id
     * @return mixed
     */
    public function actionUpdate($transacoes_id, $perfis_id)
    {
        $model = $this->findModel($transacoes_id, $perfis_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'transacoes_id' => $model->transacoes_id, 'perfis_id' => $model->perfis_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing PerfilTransacao model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $transacoes_id
     * @param integer $perfis_id
     * @return mixed
     */
    public function actionDelete($transacoes_id, $perfis_id)
    {
        $this->findModel($transacoes_id, $perfis_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PerfilTransacao model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $transacoes_id
     * @param integer $perfis_id
     * @return PerfilTransacao the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($transacoes_id, $perfis_id)
    {
        if (($model = PerfilTransacao::findOne(['transacoes_id' => $transacoes_id, 'perfis_id' => $perfis_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
