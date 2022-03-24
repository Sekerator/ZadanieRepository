<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use common\models\Product;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <input type="checkbox" id="id" checked> ID
    <input type="checkbox" id="path" checked> Path
    <input type="checkbox" id="sku" checked> SKU
    <input type="checkbox" id="title" checked> Title
    <input type="checkbox" id="count" checked> Count
    <input type="checkbox" id="type" checked> Type
    <input type="checkbox" id="delete" checked> Delete checkboxes
    <input type="checkbox" id="button" checked> Buttons

    <?php $form = \yii\widgets\ActiveForm::begin(); ?>
    <input type="submit" value="Удалить">
    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],
                [
                    'attribute' => 'id',
                    'headerOptions' => ['class' => 'id'],
                    'contentOptions' => ['class' => 'id'],
                    'footerOptions' => ['class' => 'id'],
                ],
                [
                    'attribute' => 'path',
                    'headerOptions' => ['class' => 'path'],
                    'contentOptions' => ['class' => 'path'],
                    'footerOptions' => ['class' => 'path'],
                ],
                [
                    'attribute' => 'sku',
                    'headerOptions' => ['class' => 'sku'],
                    'contentOptions' => ['class' => 'sku'],
                    'footerOptions' => ['class' => 'sku'],
                ],
                [
                    'attribute' => 'title',
                    'headerOptions' => ['class' => 'title'],
                    'contentOptions' => ['class' => 'title'],
                    'footerOptions' => ['class' => 'title'],
                ],
                [
                    'attribute' => 'count',
                    'headerOptions' => ['class' => 'count'],
                    'contentOptions' => ['class' => 'count'],
                    'footerOptions' => ['class' => 'count'],
                ],
                [
                    'attribute' => 'type',
                    'headerOptions' => ['class' => 'type'],
                    'contentOptions' => ['class' => 'type'],
                    'footerOptions' => ['class' => 'type'],
                ],
                [
                    'class' => 'yii\grid\CheckboxColumn',
                    'header' => "Удалить",
                    'headerOptions' => ['class' => 'delete'],
                    'contentOptions' => ['class' => 'delete'],
                    'footerOptions' => ['class' => 'delete'],
                    'checkboxOptions' => [
                        'value' => $model->id
                    ]
                ],
                [
                    'class' => ActionColumn::className(),
                    'headerOptions' => ['class' => 'button'],
                    'contentOptions' => ['class' => 'button'],
                    'footerOptions' => ['class' => 'button'],
                    'urlCreator' => function ($action, Product $model, $key, $index, $column) {
                        return Url::toRoute([$action, 'id' => $model->id]);
                     }
                ],
            ],
        ]); ?>
    <?php \yii\widgets\ActiveForm::end(); ?>
</div>


</div>
