<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\DaftarBarang */

$this->title = 'Update Daftar Barang: ' . ' ' . $model->id_barang;
$this->params['breadcrumbs'][] = ['label' => 'Daftar Barangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_barang, 'url' => ['view', 'id' => $model->id_barang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="daftar-barang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
