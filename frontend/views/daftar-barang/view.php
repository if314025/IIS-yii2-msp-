<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\DaftarBarang */

$this->title = $model->nama_barang;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Barang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftar-barang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->nama_barang], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->nama_barang], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_barang',
            'nama_barang',
            'jenis_barang',
            'jumlah_barang',
        ],
    ]) ?>

</div>
