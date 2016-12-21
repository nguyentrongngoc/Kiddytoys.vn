<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cart */

$this->title = 'Update Cart: ' . $model->ProductID;
$this->params['breadcrumbs'][] = ['label' => 'Carts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ProductID, 'url' => ['view', 'ProductID' => $model->ProductID, 'UserID' => $model->UserID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cart-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
