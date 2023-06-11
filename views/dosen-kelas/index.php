<?php
    use app\models\DosenKelas;
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\grid\ActionColumn;
    use yii\grid\Gridview;
?>

<div>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::button('Dosen Kelas', ['class' => 'btn btn-primary']) ?>
    </p>

    <?=
        Gridview::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                'id',
                'nip',
                'dosen_ke',
                'id_kelas',
                [
                    'class' => ActionColumn::className(),
                    'urlCreator' => function ($action, DosenKelas $model){
                        return Url::toRoute([$action, 'id' => $model->id]);
                    }
                ],
            ],
        ]);
    ?>
</div>