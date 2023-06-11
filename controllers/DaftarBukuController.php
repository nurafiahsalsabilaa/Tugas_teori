<?php

namespace app\controllers;
use app\models\DaftarBuku;
use yii\data\ActiveDataProvider;

class DaftarBukuController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $query = DaftarBuku::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }
    public function actionTambah()
    {
        $daftarBuku = new DaftarBuku;
        $daftarBuku-> kode_buku =2;
        $daftarBuku-> nama_buku = 'jaringan';
        $daftarBuku-> jumlah_stok = 14;
        $daftarBuku-> jumlah_peminjaman = 17;
        if ($daftarBuku->save()){
            return $this->redirect(['index']);
        }
        else{
            var_dump($daftarBuku-getErros());
            die();
        }
    }
    public function actionUpdate($id)
    {
        $daftarBuku = DaftarBuku::findOne($id);
        $daftarBuku-> nama_buku = 'jaringan';
        if ($daftarBuku->save()){
            return $this->redirect(['index']);
        }
        else{
            var_dump($daftarBuku-getErros());
            die();
        }
    }
    public function actionDelete($id)
    {
        $daftarBuku = DaftarBuku::findOne($id);
        $daftarBuku-> nama_buku = 'jaringan';
        if ($daftarBuku->delete()){
            return $this->redirect(['index']);
        }
        else{
            var_dump($daftarBuku-getErros());
            die();
        }
    }

}
