<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yupe\widgets\Box;

/* @var $this yii\web\View */
/* @var $model omg\work\common\models\Work */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('omg.work', 'Works'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="work-view">
    <?php  Box::begin([
        'title' => $this->title,
        'tools' =>
            Html::a(Yii::t('omg.work', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) . ' ' .
            Html::a(Yii::t('omg.work', 'Delete'), ['delete', 'id' => $model->id],
                [
                    'class' => 'btn btn-danger',
                    'data' => [
                    'confirm' => Yii::t('omg.work', 'Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ])
    ]) ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'slug',
            'description:ntext',
            'created_at',
            'updated_at',
            'author_id',
        ],
    ]) ?>

    <?php Box::end(); ?>
</div>
