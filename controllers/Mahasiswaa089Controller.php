<?php

namespace app\controllers;

use app\models\Mahasiswaa089;
use yii\data\ActiveDataProvider;
use yii;

class Mahasiswaa089Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswaa089::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]);
    }
    public function actionCreate(){
        $mahasiswaa089 = new Mahasiswaa089;
        $mahasiswaa089->nim089 = '60200121089-'.rand(100,999);
        $mahasiswaa089->nama_mahasiswa089 = 'NurafiahSalsabila';
        $mahasiswaa089->kelas089 = 'D';
        $mahasiswaa089->status089 = 'Baru';
        if ($mahasiswaa089->save()){
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }
    public function actionUpdate($id){
        $mahasiswaa089 = mahasiswaa089::findOne($id);
        if ($mahasiswaa089 !== null){
            $mahasiswaa089->kelas = 'A';
            $mahasiswaa089->status = 'Update';
            $mahasiswaa089->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);  
    }
    public function actionDelete($id){
        $mahasiswaa089 = mahasiswaa089::findOne($id);
        if ($mahasiswaa089->delete()){
            return $this->redirect(['index']);
        }
    }
    public function actionView($id){
        $mahasiswaa089 = mahasiswaa089::findOne($id);
        return $this->render('view',['mahasiswaa089' => $mahasiswaa089]);
    }
}
