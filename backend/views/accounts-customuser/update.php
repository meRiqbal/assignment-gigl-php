<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AccountsCustomuser $model */

$this->title = 'Update Accounts Customuser: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Accounts Customusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="accounts-customuser-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
