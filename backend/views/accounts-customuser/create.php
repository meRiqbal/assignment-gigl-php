<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\AccountsCustomuser $model */

$this->title = 'Create Accounts Customuser';
$this->params['breadcrumbs'][] = ['label' => 'Accounts Customusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="accounts-customuser-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
