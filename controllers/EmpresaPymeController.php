<?php

namespace app\controllers;

use Yii;
use app\models\EmpresaPyme;
use app\models\EmpContrataServ;
use app\models\EmpresaPymeSearch;
use app\models\Usuario;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * EmpresaPymeController implements the CRUD actions for EmpresaPyme model.
 */
class EmpresaPymeController extends Controller
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
     * Lists all EmpresaPyme models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new EmpresaPymeSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single EmpresaPyme model.
     * @param string $id
     * @return mixed
     */
    public function actionView($id)
    {

        $usuario = Usuario::find()->where(["emp_rut" => $id])->andWhere(["usu_tipo" => 1])->one();


        return $this->render('view', [
            'model' => $this->findModel($id), 'usuario' => $usuario
        ]);
    }

    /**
     * Creates a new EmpresaPyme model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $empresa = new EmpresaPyme();
        $servicio = new EmpContrataServ();
        $usuario = new Usuario();

        if ($empresa->load(Yii::$app->request->post()) && $servicio->load(Yii::$app->request->post()) && $usuario->load(Yii::$app->request->post())) {

            $servicio->emp_rut = $empresa->emp_rut;
            $servicio->serv_fecha_ini = date('Y-m-d');

            $usuario->emp_rut = $empresa->emp_rut;
            $usuario->usu_contraseña = "1234";
            $usuario->usu_tipo = 1;


            if($empresa->save() && $servicio->save() && $usuario->save())
                {
                    return $this->redirect(['view', 'id' => $empresa->emp_rut]);
                }

        } else {
            return $this->render('create', [
                'empresa' => $empresa, 'servicio' => $servicio, 'usuario' => $usuario
            ]);
        }
    }

    /**
     * Updates an existing EmpresaPyme model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->emp_rut]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing EmpresaPyme model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the EmpresaPyme model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return EmpresaPyme the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = EmpresaPyme::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
