<?php

use app\models\AccountsCustomuser;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;


/** @var yii\web\View $this */
/** @var backend\models\AccountsCustomuserSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Accounts Customusers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accounts-customuser-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Accounts Customuser', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php 
        use kartik\grid\GridView;
        echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'password',
            'username',
            'email:email',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
