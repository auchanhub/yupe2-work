<?php

use yii\helpers\Html;
use yupe\widgets\ActiveForm;
use yupe\widgets\Box;

/* @var $this yii\web\View */
/* @var $model omg\work\common\models\Work */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
    <div class="col-sm-12">
        <div class="work-form">
            <?php $form = ActiveForm::begin(); ?>
            <?php Box::begin([
            'footer' => Html::submitButton($model->isNewRecord ? Yii::t('omg.work', 'Create')            : Yii::t('omg.work', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn
            btn-primary'])
            ]); ?>
                <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>
    <?= $form->field($model, 'created_at')->textInput() ?>
    <?= $form->field($model, 'updated_at')->textInput() ?>
    <?= $form->field($model, 'author_id')->textInput() ?>
            <?php Box::end(); ?>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>