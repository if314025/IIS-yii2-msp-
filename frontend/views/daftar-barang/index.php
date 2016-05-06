<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DaftarBarangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Barang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftar-barang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_barang',
            'nama_barang',
            'jenis_barang',
            'jumlah_barang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
