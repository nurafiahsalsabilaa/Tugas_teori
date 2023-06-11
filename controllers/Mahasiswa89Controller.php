<?php

namespace app\controllers;

use app\models\Mahasiswa89;
use yii\data\ActiveDataProvider;
use yii;

class Mahasiswa89Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Mahasiswa89::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);
        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]);
    }
    public function actionCreate(){
        $mahasiswa89 = new Mahasiswa89;
        $mahasiswa89->nim = '60200121089-'.rand(100,999);
        $mahasiswa89->nama_mahasiswa = 'NurafiahSalsabila';
        $mahasiswa89->kelas = 'D';
        $mahasiswa89->status = 'Baru';
        if ($mahasiswa89->save()){
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }
    public function actionUpdate($id){
        $mahasiswa89 = mahasiswa89::findOne($id);
        if ($mahasiswa89 !== null){
            $mahasiswa89->kelas = 'A';
            $mahasiswa89->status = 'Update';
            $mahasiswa89->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);  
    }
    public function actionDelete($id){
        $mahasiswa89 = mahasiswa89::findOne($id);
        if ($mahasiswa89->delete()){
            return $this->redirect(['index']);
        }
    }
    public function actionView($id){
        $mahasiswa89 = mahasiswa89::findOne($id);
        return $this->render('view',['mahasiswa89' => $mahasiswa89]);
    }
}
