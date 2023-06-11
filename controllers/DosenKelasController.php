<?php

namespace app\controllers;
use app\models\DosenKelas;
use yii\data\ActiveDataProvider;

class DosenKelasController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = DosenKelas::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
