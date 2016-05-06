<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\DaftarBarang */

$this->title = 'Tambah Barang';

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftar-barang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
