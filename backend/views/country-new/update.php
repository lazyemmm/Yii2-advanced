<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CountryNew */

$this->title = 'Update Country New: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Country News', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->code]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="country-new-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
