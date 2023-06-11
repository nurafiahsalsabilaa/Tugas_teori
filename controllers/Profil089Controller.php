<?php

namespace app\controllers;
use app\models\Profil089;
use yii\data\ActiveDataProvider;

class Profil089Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = Profil089::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

}
