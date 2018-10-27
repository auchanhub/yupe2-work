<?php

/* @var $this yii\web\View */
/* @var $model omg\work\common\models\Work */

$this->title = Yii::t('omg.work', 'Update {modelClass}: ', [
    'modelClass' => 'Work',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('omg.work', 'Works'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('omg.work', 'Update');
?>

<div class="work-update">
    <?= $this->render('_form', ['model' => $model]) ?>
</div>
