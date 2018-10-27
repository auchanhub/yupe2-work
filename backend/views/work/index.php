<?php

use yii\helpers\Html;
use yupe\widgets\Box;
use yupe\widgets\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel project\plugins\omg\work\common\search\models\WorkQuery */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('omg.work', 'Works');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="work-index">
    <?php Box::begin([
        'title' => 'Список',
        'tools' => Html::a('<i class="fa fa-plus-circle"></i> Добавить', ['create'], ['class' => 'btn btn-default'])
    ]); ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?php Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'slug',
            'description:ntext',
            'created_at',
            // 'updated_at',
            // 'author_id',

            ['class' => 'yupe\widgets\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
    <?php Box::end(); ?>
</div>
