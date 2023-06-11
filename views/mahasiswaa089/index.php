<?php
    use yii\grid\Gridview;
    use yii\grid\SerialColumn;
    use yii\grid\ActionColumn;
    use yii\helpers\Html;
?>

<?= 
    Html::a('Tambahan Mahasiswa', ['create'],['class' => 'btn btn-primary']);
 ?>

<?=
    Gridview::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => SerialColumn::className()],
            'id089',
            'nim089',
            'nama_mahasiswa089',
            'kelas089',
            'status089',
            ['class' => ActionColumn::className()]
        ]
    ]);
?>
