<?php

/* @var $this yii\web\View */
/* @var $model omg\work\common\models\Work */

$this->title = Yii::t('omg.work', 'Create Work');
$this->params['breadcrumbs'][] = ['label' => Yii::t('omg.work', 'Works'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="work-create">
    <?= $this->render('_form', ['model' => $model]) ?>
</div>
