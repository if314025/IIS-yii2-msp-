<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\DaftarSupplier */

$this->title = 'Tambah Daftar Supplier';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftar-supplier-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
