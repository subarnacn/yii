<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$this->title = 'Add Book';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to add books:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'add-form']); ?>

                <?= $form->field($model, 'bookname') ?>

                <?= $form->field($model, 'authorname') ?>

                <?= $form->field($model, 'about')->textarea() ?>

                <?= $form->field($model, 'page') ?>

              
                <div class="form-group">
                    <?= Html::submitButton('Add', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
