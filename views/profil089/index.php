<?php
    use yii\grid\Gridview;
?>

<?=
    Gridview::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'Id',
            'id_mahasiswa',
            'foto_profil',
        ]
    ])
?>