<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\DaftarSupplier */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="daftar-supplier-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nama_supplier')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Alamat_Supplier')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
