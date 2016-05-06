<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\DaftarSupplier */

$this->title = $model->Nama_supplier;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Suppliers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftar-supplier-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'Nama_supplier' => $model->Nama_supplier], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'Nama_supplier' => $model->Nama_supplier], [
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
            'id_supplier',
            'Nama_supplier',
            'Alamat_Supplier',
        ],
    ]) ?>

</div>
