<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CountryNew */

$this->title = 'Create Country New';
$this->params['breadcrumbs'][] = ['label' => 'Country News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-new-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
