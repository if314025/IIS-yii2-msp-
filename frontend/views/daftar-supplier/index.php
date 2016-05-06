<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\DaftarSupplierSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Supplier';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftar-supplier-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_supplier',
            'Nama_supplier',
            'Alamat_Supplier',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
